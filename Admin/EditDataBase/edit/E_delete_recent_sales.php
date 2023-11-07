<?php 
    $level ="../../";
    include_once "{$level}Database/dashboard/list_data_recentSales.php";    

    // echo "connected";
   
    $id = $_GET['id'];
        // echo $a;
    $sql = $conn->prepare("update data_table_bills set status = 'Rejected' where id = ?;");
    $sql->execute([$id]);

    header("location:{$level}pages/tables-data-orders.php")

?>