<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $level = "../../";
        include_once("{$level}Content/meta-data/data-admin.php");
        include_once("{$level}Content/script/script-admin.php");
        include_once "{$level}Database/tables/list_data_user.php";    

        $id = $_GET['id'];
        $fullname;
        $email;
        $phone_number;
        $address;
        $password; 
        foreach($user as $us)
        {
            if($us['id'] == $id)
            {
                $fullname = $us['fullname'];
                $email = $us['email'];
                $phone_number = $us['phone_number'];
                $address = $us['address'];
                $password = $us['password']; 
            }
        };
        // echo $preview;
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
    </style>
</head>

<body>
    <form action="<?php echo $level ?>EditDataBase/edit/E_change_user.php?id=<?php echo $id ?>" method="POST">
        <h2>Change Information User </h2>
        <div class="form-group">
            <label for="fullname">Fullname:</label>
            <input type="text" class="form-control" placeholder="Enter your full name" name="fullname" id="fullname" value="<?php echo $fullname ?> ">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" value="<?php echo $email ?>">
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" class="form-control" placeholder="Enter your phone number" name="phone_number" id="phone_number" value="<?php echo $phone_number ?>"> 
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" placeholder="Enter your address" name="address" id="address" value="<?php echo $address ?>"> 
        </div>
        <div class="form-group position-relative">
            <label for="password">Password:</label>
            <input type="password" class="form-control input" placeholder="Enter your password" name="password" id="password" value="<?php echo $password ?>"> 
            <i class="bi bi-eye eye position-absolute top-50 start-100 open-eye"></i>
            <i class="bi bi-eye-slash eye position-absolute top-50 start-100 close-eye"></i>
        </div>
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Change</button>
        </div>
    </form>
</body>
        <script>
            const input = document.querySelector(".input");
            const eyeOpen = document.querySelector(".open-eye");
            const eyeClose = document.querySelector(".close-eye");
            eyeOpen.addEventListener("click", function(){
                eyeOpen.classList.add("hidden");
                eyeClose.classList.remove("hidden");
                input.setAttribute("type", "password");
            });
            eyeClose.addEventListener("click", function(){
                eyeClose.classList.add("hidden");
                eyeOpen.classList.remove("hidden");
                input.setAttribute("type", "text");
            });
        </script>
</html>