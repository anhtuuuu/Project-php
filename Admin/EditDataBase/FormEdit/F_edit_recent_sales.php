<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $level = "../../";
        include_once("{$level}Content/meta-data/data-admin.php");
        include_once("{$level}Content/script/script-admin.php");
        include_once "{$level}Database/dashboard/list_data_recentSales.php";    

        $customer;
        $product;
        $price;
        $id = $_GET['id'];
        foreach($recentSales as $rcs)
        {
            if($rcs['id'] == $id)
            {
                $customer = $rcs['customer'];
                $product =  $rcs['product'];
                $price =  $rcs['price'];
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
    <form action="<?php echo $level ?>EditDataBase/edit/E_change_recent_sales.php?id=<?php echo $id ?>" method="POST">
        <h2>Change Recent Sales </h2>
        <div class="form-group">
            <label for="customer">Customer:</label>
            <input type="text" class="form-control" placeholder="Enter Customer" name="customer" id="customer" value="<?php echo $customer ?>">
        </div>
        <div class="form-group">
            <label for="product">Product:</label>
            <input type="text" class="form-control" placeholder="Enter Customer" name="product" id="product" value="<?php echo $product ?>">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" placeholder="Enter Price" name="price" id="price" value="<?php echo $price ?>"> 
        </div>
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Change</button>
        </div>
    </form>
</body>

</html>