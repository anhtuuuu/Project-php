<?php   
    include_once "{$level}Database/connect/connect_database.php";
    $data_order_details = $conn->query("SELECT * FROM order_details");
    $order_details = $data_order_details->fetchAll(PDO::FETCH_ASSOC);    
?>