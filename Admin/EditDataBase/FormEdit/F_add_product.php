<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $level = "../../";
        include_once("{$level}Content/meta-data/data-admin.php");
        include_once("{$level}Content/script/script-admin.php");       
        include_once "{$level}Database/tables/list_data_category.php";

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
    <form action="<?php echo $level ?>EditDataBase/edit/E_add_product.php" method="POST" enctype="multipart/form-data">
        <h2>Add New Product </h2>
        <div class="form-group">
            <label for="">Category:</label>            
            <select class="form-control" name="category_id" id="">
                <option value="" class="text-secondary">---Choose category---</option>
                <?php foreach($category as $ctgr){ ?>
                    <option value="<?php echo $ctgr['id']?>"><?php echo $ctgr['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input required type="title" class="form-control" placeholder="Enter your title" name="title" id="title" >
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input required type="text" class="form-control" placeholder="Enter your phone number" name="price" id="price"> 
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input required type="text" class="form-control" placeholder="Enter your quantity" name="quantity" id="quantity"> 
        </div>
        <div class="form-group position-relative">
            <label for="thumbnail">Thumbnail:</label>
            <input required type="file" class="form-control input" placeholder="Enter your thumbnail" name="thumbnail" id="thumbnail"> 
        </div>
        <div class="form-group position-relative">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Enter your description"></textarea>
        </div>
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</body>        
</html>