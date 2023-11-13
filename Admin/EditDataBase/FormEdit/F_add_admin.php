<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $level = "../../";
        include_once("{$level}Content/meta-data/data-admin.php");
        include_once("{$level}Content/script/script-admin.php");       
        include_once "{$level}Database/tables/list_data_user.php";

    ?>
    <style>
        body{
            width: 100%;
            display: grid;
            place-items:center;
        }
        form{            
            margin-top: 100px;
            padding:20px;
            border:1px solid #dadce0;
            border-radius: 10px;
        }
        .form-group{
            margin:10px 0;
            width: 400px;
        }
        .btn-add{
            margin-top: 20px;
        }
        .eye{
            transform: translateX(-30px);
        }
        .hidden{
            display: none;
        }
        .notchoose{
            cursor: no-drop !important;
        }
    </style>
</head>

<body>    
    <form action="<?php echo $level ?>EditDataBase/edit/E_add_admin.php" method="POST" onchange="CanNotAction()">
        <h2>Add New Account Admin </h2>        
        <div class="form-group">
            <label for="fullname">Fullname:</label>
            <input required type="text" class="form-control text-capitalize" placeholder="Enter Your fullname" name="fullname" id="fullname" >
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input required type="email" class="form-control" placeholder="Enter Your Email" name="email" id="email"> 
        </div>
        <div class="form-group">
            <label for="phone_number">Phone number:</label>
            <input required type="text" class="form-control" placeholder="Enter Your Phone Number" name="phone_number" id="phone_number"> 
        </div>
        <div class="form-group position-relative">
            <label for="address">Address:</label>
            <input required type="text" class="form-control input text-capitalize" placeholder="Enter Your Address" name="address" id="address"> 
        </div>
        <div class="form-group position-relative">
            <label for="password">Password:</label>
            <input required type="password" class="form-control input password" placeholder="Enter Your Password" name="password" id="password" minlength="8" minlength="32" onchange="appear()"  > 
            <!-- <i class="bi bi-eye eye position-absolute top-50 start-100 open-eye"></i>
            <i class="bi bi-eye-slash eye position-absolute top-50 start-100 close-eye"></i> -->
        </div>
        <div class="form-group position-relative">
            <label for="confirm_password">Confirm Password:</label>
            <input required type="password" class="form-control input confirm_password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" onchange="appear()"> 
            <!-- <i class="bi bi-eye eye position-absolute top-50 start-100 open-eye"></i>
            <i class="bi bi-eye-slash eye position-absolute top-50 start-100 close-eye"></i> -->
            <p class="note text-danger hidden">The passwords do not match. Please enter the password again.</p>
        </div>      
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary ">Add</button>
        </div>
    </form>
</body>     
<script>
    const input = document.querySelector(".input");
    const password = document.querySelector(".password");
    const cfPassword = document.querySelector(".confirm_password");
    const note = document.querySelector(".note");
    const form = document.querySelector("form");
    const btn = document.querySelector(".btn");

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
    function CanNotAction()
    {        
        if(!note.classList.contains('hidden'))
        {
            form.setAttribute("action", "");
            btn.classList.add("notchoose");      

        }
        else
        {
            form.setAttribute("action", "<?php echo $level ?>EditDataBase/edit/E_add_admin.php");
            btn.classList.remove("notchoose");
        }
    }
 
    
    
</script>   
</html>