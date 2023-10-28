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
    <form action="<?php echo $level ?>EditDataBase/edit/E_add_top_selling.php" method="POST">
        <h2>Add Top Selling </h2>
        <div class="form-group">
            <label for="preview">Preview:</label>
            <input type="file" class="form-control" placeholder="Enter Preview" name="preview" id="preview">
        </div>
        <div class="form-group">
            <label for="product">Product:</label>
            <input type="text" class="form-control" placeholder="Enter Customer" name="product" id="product">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" placeholder="Enter Price" name="price" id="price">
        </div>
        <div class="form-group">
            <label for="sold">Sold:</label>
            <input type="number" class="form-control" placeholder="Enter Sold" name="sold" id="sold">
        </div>
        <div class="form-group">
            <label for="revenue">Revenue:</label>
            <input type="text" class="form-control" placeholder="Enter Revenue" name="revenue" id="revenue">
        </div>        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</body>

</html>