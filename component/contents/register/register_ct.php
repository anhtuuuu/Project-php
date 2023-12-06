<style>
    .hidden
    {
        display: none;
    }
</style>
<!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
                            <div class="row">
                                    <div class="col-12">
                                        <div class="breadcrumb_content">
                                            <ul>
                                                <li><a href="<?php echo $level?>index.php">home</a></li>
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

                                        <!--register area start-->
                                        <div class="col-lg-6 col-md-6">
                                            <div class="account_form register">
                                                <h2>Register</h2>
                                                <form action="<?php echo $level ?>Database/EditDatabase/E_add_user.php" method="POST">
                                                    <p>   
                                                        <label>Email address  <span>*</span></label>
                                                        <input required type="text" name="email">
                                                     </p>
                                                     <p>   
                                                        <label>Full name <span>*</span></label>
                                                        <input required type="text" name="fullname">
                                                     </p>
                                                     <p>   
                                                        <label>Phone number <span>*</span></label>
                                                        <input required type="text" name="phone_number">
                                                     </p>
                                                     <p>   
                                                        <label>Address <span>*</span></label>
                                                        <input required type="text" name="address">
                                                     </p>                                                     
                                                     <p>   
                                                        <label>Password <span>*</span></label>
                                                        <input required class="password" type="password" name="password" minlength="8" minlength="32">
                                                     </p>
                                                     <p>   
                                                        <label>Confirm passwords <span>*</span></label>
                                                        <input required class="confirm_password" type="password" name="" onchange="appear()">
                                                     </p>
                                                    <p class="note text-danger hidden">The passwords do not match. Please enter the password again.</p>

                                                    <div class="login_submit">
                                                        <button type="submit" name="add_user">Register</button>
                                                        <a href="<?php echo $level ?>pages/login.php">Login</a>
                                                    </div>
                                                </form>
                                            </div>    
                                        </div>
                                        <!--register area end-->
                                    </div>
                        </div>
                        <!-- customer login end -->
<?php 
    if(isset($_GET['note'])){
?>
    <script>
        alert('Create a successful account !!!');
    </script>
<?php
    }
?>

<script>
    const password = document.querySelector(".password");
    const cfPassword = document.querySelector(".confirm_password");
    const note = document.querySelector(".note");    

    function appear()
    {
        if(password.value.trim() != '')
        {
            if(password.value == cfPassword.value){
                note.classList.add("hidden");        
            }
            else
            {
                note.classList.remove("hidden");        
            }
        }
        else 
        {
            note.classList.add("hidden");
        }
   
    }
</script>