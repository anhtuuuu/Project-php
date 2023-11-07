<?php
    $level = "../../";
    include_once "{$level}Database/dashboard/list_data_recentSales.php";    
    $status_default = "Pending";
    $count_id = 0;
    foreach($recentSales as $rcs)
    {
        $count_id++;
    }
    // echo     $count_id ;
    ++$count_id;
    if($count_id < 10) $count_id = '0'.$count_id;
    // echo     $count_id ;

    $next_id = 'SP'.$count_id;
    // echo     $next_id 
   
    $st = $conn->prepare("insert into data_table_bills values(?,?,?,?,?)");
    $st->execute([$next_id,$_POST['bill_date'],$_POST['id_user'],$_POST['id_employee'],$_POST['price'], $status_default]);

    header("location:{$level}pages/tables-data-orders.php")

?>