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
    <form action="<?php echo $level ?>EditDataBase/edit/E_add_table_bill_detail.php" method="POST">
        <h2>Add Bill Detail </h2>
        <div class="form-group">
            <label for="bill_ID">Bill ID:</label>
            <input type="text" class="form-control" placeholder="Enter bill_ID" name="bill_ID" id="bill_ID">
        </div>
        <div class="form-group">
            <label for="product_ID">Product ID:</label>
            <input type="text" class="form-control" placeholder="Enter product_ID" name="product_ID" id="product_ID">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" class="form-control" placeholder="Enter quantity" name="quantity" id="quantity">
        </div>
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</body>

</html>