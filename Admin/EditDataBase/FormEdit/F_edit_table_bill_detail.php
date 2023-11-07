<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $level = "../../";
        include_once("{$level}Content/meta-data/data-admin.php");
        include_once("{$level}Content/script/script-admin.php");
        include_once "{$level}Database/tables/list_data_tables_bill_detail.php";    

        $quantity;
        $status;
       
        $id = $_GET['id'];
        foreach($clients as $el)
        {
            if($el['bill_detail_ID'] == $id)
            {
                $quantity = $el['quantity'];
                $status =  $el['status'];
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
    <form action="<?php echo $level ?>EditDataBase/edit/E_change_table_bill_detail.php?id=<?php echo $id ?>" method="POST">
        <h2>Change Information Bill Detail </h2>
        <div class="form-group">
            <label for="quantity">quantity:</label>
            <input type="text" class="form-control" placeholder="Enter quantity" name="quantity" id="quantity" value="<?php echo $quantity ?>">
        </div>
        <div class="form-group">
            <label for="status">status:</label>
            <input type="text" class="form-control" placeholder="Enter status" name="status" id="status" value="<?php echo $status ?>">
        </div>
       
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Change</button>
        </div>
    </form>
</body>

</html>