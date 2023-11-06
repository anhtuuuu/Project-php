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
    <form action="<?php echo $level ?>EditDataBase/edit/E_add_recent_sales.php" method="POST">
        <h2>Add Recent Sales </h2>
        <div class="form-group">
            <label for="bill_date">Bill date:</label>
            <input type="text" class="form-control" placeholder="Enter bill date" name="bill_date" id="bill_date">
        </div>
        <div class="form-group">
            <label for="id_user">Id user:</label>
            <input type="text" class="form-control" placeholder="Enter id_user" name="id_user" id="id_user">
        </div>
        <div class="form-group">
            <label for="id_employee">Id employee:</label>
            <input type="text" class="form-control" placeholder="Enter id_employee" name="id_employee" id="id_employee">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" placeholder="Enter Price" name="price" id="price">
        </div>
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</body>

</html>