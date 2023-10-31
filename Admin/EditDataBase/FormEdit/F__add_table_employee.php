<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $level = "../../";
        include_once("{$level}Content/meta-data/data-admin.php");
        include_once("{$level}Content/script/script-admin.php");
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
    </style>
</head>

<body>
    <form action="<?php echo $level ?>EditDataBase/edit/E_add_table_employee.php" method="POST">
        <h2>Add Recent Sales </h2>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" class="form-control" placeholder="Enter Position" name="position" id="position">
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="text" class="form-control" placeholder="Enter Age" name="age" id="age">
        </div>
        <div class="form-group">
            <label for="startdate">Start Date:</label>
            <input type="text" class="form-control" placeholder="Enter Start Date" name="startdate" id="startdate">
        </div>
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</body>

</html>