<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $level = "../../";
        include_once("{$level}Content/meta-data/data-admin.php");
        include_once("{$level}Content/script/script-admin.php");
        include_once "{$level}Database/dashboard/list_data_topSelling.php";    

        $preview;
        $product;
        $price;
        $sold;
        $revenue;
        $id = $_GET['id'];
        foreach($topSelling as $tsl)
        {
            if($tsl['id'] == $id)
            {
                $preview = $tsl['preview'];
                $product =  $tsl['product'];
                $price =  $tsl['price'];
                $sold =  $tsl['sold'];
                $revenue =  $tsl['revenue'];
            }
        };
        echo $preview;
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
    <form action="<?php echo $level ?>EditDataBase/edit/E_change_top_selling.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
        <h2>Change Top Selling </h2>
        <div class="form-group">
            <label for="preview">Preview:</label>
            <input type="file" class="form-control" placeholder="Enter Preview" name="preview" id="preview" value="<?php echo $preview ?> ">
        </div>
        <div class="form-group">
            <label for="product">Product:</label>
            <input type="text" class="form-control" placeholder="Enter Product" name="product" id="product" value="<?php echo $product ?>">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" placeholder="Enter Price" name="price" id="price" value="<?php echo $price ?>"> 
        </div>
        <div class="form-group">
            <label for="sold">Sold:</label>
            <input type="text" class="form-control" placeholder="Enter Sold" name="sold" id="sold" value="<?php echo $sold ?>"> 
        </div>
        <div class="form-group">
            <label for="revenue">Revenue:</label>
            <input type="text" class="form-control" placeholder="Enter Revenue" name="revenue" id="revenue" value="<?php echo $revenue ?>"> 
        </div>
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Change</button>
        </div>
    </form>
</body>

</html>