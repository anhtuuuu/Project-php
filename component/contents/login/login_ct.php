<?php
  include_once "{$level}Database/tables/list_data_user.php";
  if(isset($_POST['login']))
  {
    $userName = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      setcookie('userNameC',$userName,time()+86400);
      setcookie('passwordC',$password,time()+86400);            
    }
    $sqlLogin = "select * from user where email like '$userName' and password like '$password' and deleted = '1' ";
    $result = $conn->query($sqlLogin);
    $row = $result->fetchAll(PDO::FETCH_ASSOC); 
    if(count($row))
    {
      $_SESSION['loginC'] = $row;
      header("location:{$level}index.php");
    }

  }

  $getUN = "";
  $getPass = "";
  $check = false;
  if(isset($_COOKIE['userNameC']) && isset($_COOKIE['passwordC']))
  {
    $getUN = $_COOKIE['userNameC'];
    $getPass = $_COOKIE['passwordC'];
    $check = true;
  }
?>
  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
      <div class="row">
          <div class="col-12">
              <div class="breadcrumb_content">
                  <ul>
                      <li><a href="<?php echo $level ?>index.php">home</a></li>
                      <li><i class="fa fa-angle-right"></i></li>
                      <li>login</li>
                  </ul>

              </div>
          </div>
      </div>
  </div>
  <!--breadcrumbs area end-->

                       <!-- customer login start -->
                        <div class="customer_login">
                            <div class="row">
                                       <!--login area start-->
                                        <div class="col-lg-6 col-md-6">
                                            <div class="account_form">
                                                <h2>login</h2>
                                                <form action="" method="POST">
                                                    <p>   
                                                        <label>Username or email <span>*</span></label>
                                                        <input type="text" name="email" value="<?php echo $getUN ?>">
                                                     </p>
                                                     <p>   
                                                        <label>Passwords <span>*</span></label>
                                                        <input type="password" name="password" value="<?php echo $getPass ?>">
                                                     </p>   
                                                    <div class="login_submit">
                                                        <button type="submit" name="login">login</button>
                                                        <label for="remember">
                                                            <input <?php echo $check?"checked":"" ?> id="remember" type="checkbox" name="remember">
                                                            Remember me
                                                        </label>
                                                        <a href="<?php echo $level ?>pages/register.php">Register</a>
                                                    </div>

                                                </form>
                                             </div>    
                                        </div>
                                        <!--login area start-->
                                    </div>
                        </div>
                        <!-- customer login end -->
