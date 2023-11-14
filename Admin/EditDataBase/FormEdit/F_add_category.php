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
    <form action="<?php echo $level ?>EditDataBase/edit/E_add_category.php" method="POST">
        <h2>Add New Category </h2>        
        <div class="form-group">
            <label for="name">Name:</label>
            <input required type="text" class="form-control text-capitalize" placeholder="Enter name category" name="name" id="name" >
        </div>                
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary ">Add</button>
        </div>
    </form>
</body>    
</html>