<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $level = "../../";
        include_once("{$level}Content/meta-data/data-admin.php");
        include_once("{$level}Content/script/script-admin.php");
        include_once "{$level}Database/tables/list_data_category.php";    

        $id = $_GET['id'];        
        $name;       
        foreach($category as $us)
        {
            if($us['id'] == $id)
            {               
                $name = $us['name'];               
            }
        };

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
    <form action="<?php echo $level ?>EditDataBase/edit/E_change_category.php?id=<?php echo $id ?>" method="POST">
        <h2>Change Category </h2>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter new name" name="name" id="name" value="<?php echo $name ?>">
        </div>
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Change</button>
        </div>
    </form>
</body>       
</html>