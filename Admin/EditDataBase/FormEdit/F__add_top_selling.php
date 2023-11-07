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
    <form action="<?php echo $level ?>EditDataBase/edit/E_add_top_selling.php" method="POST" enctype="multipart/form-data">
        <h2>Add Top Selling </h2>
        <div class="form-group">
            <label for="preview">Preview:</label>
            <input type="file" class="form-control" placeholder="Enter Preview" name="preview" id="preview">
        </div>
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" id="product_name">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" placeholder="Enter Price" name="price" id="price">
        </div>
        <div class="form-group">
            <label for="manufacturing_country">Manufacturing_country:</label>
            <input type="text" class="form-control" placeholder="Enter Manufacturing_country" name="manufacturing_country" id="manufacturing_country">
        </div>
        <div class="form-group">
            <label for="tyle">Tyle:</label>
            <input type="text" class="form-control" placeholder="Enter Tyle" name="tyle" id="tyle">
        </div>        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</body>

</html>