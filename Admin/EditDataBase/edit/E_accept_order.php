<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_orders.php";    

    // echo "connected";
    $id = $_GET['id'];
      
    $sql = $conn->prepare("update orders set status = 2 where id = ?");
    $sql->execute([$id]);

    header("location:{$level}pages/table-data-orders.php")    

?>