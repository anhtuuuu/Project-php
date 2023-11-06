<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $level = "../../";
        include_once("{$level}Content/meta-data/data-admin.php");
        include_once("{$level}Content/script/script-admin.php");
        include_once "{$level}Database/tables/list_data_tables_client.php";    

        $name;
        $address;
        $phone;
        $startdate;
        $id = $_GET['id'];
        foreach($clients as $client)
        {
            if($client['id'] == $id)
            {
                $name = $client['name'];
                $address =  $client['address'];
                $phone =  $client['phone'];
                $startdate = $client['startdate'];
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
    <form action="<?php echo $level ?>EditDataBase/edit/E_change_table_client.php?id=<?php echo $id ?>" method="POST">
        <h2>Change Information Client </h2>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" value="<?php echo $name ?>">
        </div>
        <div class="form-group">
            <label for="address">address:</label>
            <input type="text" class="form-control" placeholder="Enter address" name="address" id="address" value="<?php echo $address ?>">
        </div>
        <div class="form-group">
            <label for="phone">phone:</label>
            <input type="text" class="form-control" placeholder="Enter phone" name="phone" id="phone" value="<?php echo $phone ?>"> 
        </div>
        <div class="form-group">
            <label for="startdate">Start Date:</label>
            <input type="text" class="form-control" placeholder="Enter Start Date" name="startdate" id="startdate" value="<?php echo $startdate ?>"> 
        </div>
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Change</button>
        </div>
    </form>
</body>

