<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $level = "../../";
        include_once("{$level}Content/meta-data/data-admin.php");
        include_once("{$level}Content/script/script-admin.php");
        include_once "{$level}Database/tables/list_data_tables_employee.php";    

        $name;
        $position;
        $age;
        $startdate;
        $id = $_GET['id'];
        foreach($employee as $el)
        {
            if($el['id'] == $id)
            {
                $name = $el['name'];
                $position =  $el['position'];
                $age =  $el['age'];
                $startdate = $el['startdate'];
            }
        }
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
    <form action="<?php echo $level ?>EditDataBase/edit/E_change_table_employee.php?id=<?php echo $id ?>" method="POST">
        <h2>Change Information Employee </h2>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" value="<?php echo $name ?>">
        </div>
        <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" class="form-control" placeholder="Enter Position" name="position" id="position" value="<?php echo $position ?>">
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="text" class="form-control" placeholder="Enter Age" name="age" id="age" value="<?php echo $age ?>"> 
        </div>
        <div class="form-group">
            <label for="startdate">Start Date:</label>
            <input type="text" class="form-control" placeholder="Enter Start Date" name="startdate" id="startdate" value="<?php echo $startdate ?>"> 
        </div>
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Change</button>
        </div>
    </form>
</body>

</html>