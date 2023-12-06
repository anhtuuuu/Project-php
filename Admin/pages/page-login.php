<?php $level = '../';
  include_once "{$level}Database/tables/list_data_user.php";
  session_start();
  if(isset($_POST['login']))
  {
    $userName = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      setcookie('userName',$userName,time()+86400);
      setcookie('password',$password,time()+86400);            
    }
    $sqlLogin = "select * from user where email like '$userName' and password like '$password' and role_id = '1' and deleted = '1' ";
    $result = $conn->query($sqlLogin);
    $row = $result->fetchAll(PDO::FETCH_ASSOC); 
    if(count($row))
    {
      $_SESSION['login'] = $row;
      header("location:{$level}index.php");
    }

  }

  $getUN = "";
  $getPass = "";
  $check = false;
  if(isset($_COOKIE['userName']) && isset($_COOKIE['password']))
  {
    $getUN = $_COOKIE['userName'];
    $getPass = $_COOKIE['password'];
    $check = true;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once("{$level}Content/meta-data/data-admin.php")?>
</head>
<body>
    
<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Login</h1>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Login</h5>

          <!-- Horizontal Form -->
          <form method="POST" action="">              
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input required name="email" type="email" class="form-control" id="inputEmail" placeholder="Enter your email" value="<?php echo $getUN ?>">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-3 col-form-label" >Password</label>
              <div class="col-sm-9">
                <input required name="password" type="password" class="form-control" id="inputPassword" placeholder="Enter your password" value="<?php echo $getPass ?>">
              </div>
            </div>
            <div class="col mb-3 d-flex">              
              <div class="col-sm-1 d-flex align-items-center">
                <input <?php echo ($check)?"checked":"" ?> name="remember" type="checkbox" id="remember" value="1">
              </div>
              <label for="inputPassword3" class="col-sm-3 col-form-label" >Remember me</label>
            </div>          
            <div class="text-center d-flex flex-row-reverse">
              <button type="submit" class="btn btn-primary btn-login" name="login" >Login</button>
            </div>
          </form><!-- End Horizontal Form -->

        </div>
      </div>
</section>
</main>
<?php include_once("{$level}Content/script/script-admin.php")?>
</body>
</html>