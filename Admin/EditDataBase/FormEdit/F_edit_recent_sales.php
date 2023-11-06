<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $level = "../../";
        include_once("{$level}Content/meta-data/data-admin.php");
        include_once("{$level}Content/script/script-admin.php");
        include_once "{$level}Database/dashboard/list_data_recentSales.php";    

        $bill_date;
        $id_user;
        $id_employee;
        $invoice_value;
        $id = $_GET['id'];
        foreach($recentSales as $rcs)
        {
            if($rcs['id'] == $id)
            {
                $bill_date = $rcs['bill_date'];
                $id_user =  $rcs['id_user'];
                $id_employee =  $rcs['id_employee'];
                $invoice_value =  $rcs['invoice_value'];
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
            <label for="bill_date">Bill date:</label>
            <input type="text" class="form-control" placeholder="Enter bill date" name="bill_date" id="bill_date" value="<?php echo $bill_date ?>">
        </div>
        <div class="form-group">
            <label for="id_user">Id user:</label>
            <input type="text" class="form-control" placeholder="Enter id user" name="id_user" id="id_user" value="<?php echo $id_user ?>">
        </div>
        <div class="form-group">
            <label for="id_employee">Id employee:</label>
            <input type="text" class="form-control" placeholder="Enter id employee" name="id_employee" id="id_employee" value="<?php echo $id_employee ?>">
        </div>
        <div class="form-group">
            <label for="invoice_value">Invoice value:</label>
            <input type="text" class="form-control" placeholder="Enter invoice value" name="invoice_value" id="invoice_value" value="<?php echo $invoice_value ?>"> 
        </div>
        
        <div class="btn-add d-flex flex-row-reverse">
            <button type="submit" class="btn btn-primary">Change</button>
        </div>
    </form>
</body>

</html>