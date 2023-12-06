<?php
if(!isset($_SESSION['login']))
{
    header("location:{$level}pages/page-login.php");
}
  include_once "{$level}Database/tables/list_data_user.php";
  
  $getPassword = '';
  $getEmail = '';


  if(isset($_POST['btn']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
    foreach($user as $us)
    {
      if($us['email'] == $email && $us['role_id'] == '1')
      {
        $getEmail = $email;
        if($us['password'] == $password)
        {
          $getPassword = $password;
          break;
        }
        $getPassword = '0';
      }
      else
      {
        $getEmail = '0';
      }
    }
    
    
  }
  function checkEmail($check)
  {
    if($check == '0')
    {
      return '<p class="text-danger">Can not find your email.</p>';
    }
    else return '';
  }
  function checkPassword($check)
  {
    if($check == '0')
    {
      return '<p class="text-danger">Your password is incorrect.</p>';
    }
    else return '';
  }
  
    
?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form Login</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $level ?>index.php">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Login</li>
      </ol>
    </nav>
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
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input required name="email" type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
                  <?php echo checkEmail($getEmail) ?>
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label" >Password</label>
                <div class="col-sm-10">
                  <input required name="password" type="password" class="form-control" id="inputPassword" placeholder="Enter your password">
                  <?php echo checkPassword($getPassword) ?>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-login" name="btn" >Login</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- End Horizontal Form -->

          </div>
        </div>
  </section>
  <?php
  echo 'abc: '.$getEmail;
  ?>
</main>
