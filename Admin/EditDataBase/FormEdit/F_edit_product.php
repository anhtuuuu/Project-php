<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $level = "../../";
        include_once("{$level}Content/meta-data/data-admin.php");
        include_once("{$level}Content/script/script-admin.php");
        include_once "{$level}Database/tables/list_data_product.php";   
        include_once "{$level}Database/tables/list_data_category.php";
        $sql = "select product.id,category_id,title,price,quantity,thumbnail,description,created_at,updated_at,deleted,category.name from product inner join category on product.category_id = category.id";
        $data = $conn->query($sql);
        $product_category = $data->fetchAll(PDO::FETCH_ASSOC);   

        $id = $_GET['id'];        
        $category_id;
        $title;
        $price;
        $quantity;
        $thumbnail;
        $description;
        $name;           
        foreach($product_category as $us)
        {
            if($us['id'] == $id)
            {
                $category_id = $us['category_id'];
                $title = $us['title'];
                $price = $us['price'];
                $quantity = $us['quantity'];
                $thumbnail = $us['thumbnail'];
                $description = $us['description'];
                $name = $us['name'];    
            }
        };
        // echo $preview;
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
    <form action="<?php echo $level ?>EditDataBase/edit/E_change_product.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
        <h2>Change Information Product </h2>
        <div class="form-group">
            <label for="">Category:</label>            
            <select class="form-control" name="category_id" id="" value="<?php echo $name?>">
                <?php foreach($category as $ctgr){ ?>
                    <option value="<?php echo $ctgr['id']?>"><?php echo $ctgr['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="title" class="form-control" placeholder="Enter your title" name="title" id="title" value="<?php echo $title ?>">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" placeholder="Enter your phone number" name="price" id="price" value="<?php echo $price ?>"> 
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" class="form-control" placeholder="Enter your quantity" name="quantity" id="quantity" value="<?php echo $quantity ?>"> 
        </div>
        <div class="form-group position-relative">
            <label for="thumbnail">Thumbnail:</label>
            <input type="file" class="form-control input" placeholder="Enter your thumbnail" name="thumbnail" id="thumbnail" value="<?php echo $thumbnail ?>"> 
        </div>
        <div class="form-group position-relative">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Enter your description"><?php echo $description ?></textarea>
        </div>
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Change</button>
        </div>
    </form>
</body>        
</html>