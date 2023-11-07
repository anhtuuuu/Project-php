<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $level = "../../";
        include_once("{$level}Content/meta-data/data-admin.php");
        include_once("{$level}Content/script/script-admin.php");
        include_once "{$level}Database/dashboard/list_data_topSelling.php";    

        $preview;
        $product_name;
        $price;
        $manufacturing_country;
        $type;
        $id = $_GET['id'];
        foreach($topSelling as $tsl)
        {
            if($tsl['id'] == $id)
            {
                $preview = $tsl['preview'];
                $product_name =  $tsl['product_name'];
                $price =  $tsl['price'];
                $manufacturing_country =  $tsl['manufacturing_country'];
                $type =  $tsl['type'];
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
        <h2>Change Product </h2>
        <div class="form-group">
            <label for="preview">Preview:</label>
            <input type="file" class="form-control" placeholder="Enter Preview" name="preview" id="preview" value="<?php echo $preview ?> ">
        </div>
        <div class="form-group">
            <label for="product_name">Product name:</label>
            <input type="text" class="form-control" placeholder="Enter product_name" name="product_name" id="product_name" value="<?php echo $product_name ?>">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" placeholder="Enter Price" name="price" id="price" value="<?php echo $price ?>"> 
        </div>
        <div class="form-group">
            <label for="manufacturing_country">Manufacturing_country:</label>
            <input type="text" class="form-control" placeholder="Enter manufacturing_country" name="manufacturing_country" id="manufacturing_country" value="<?php echo $manufacturing_country ?>"> 
        </div>
        <div class="form-group">
            <label for="type">type:</label>
            <input type="text" class="form-control" placeholder="Enter type" name="type" id="type" value="<?php echo $type ?>"> 
        </div>
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Change</button>
        </div>
    </form>
</body>

</html>