<?php   
    include_once "{$level}Database/connect/connect_database.php";
    $data_orders = $conn->query("SELECT * FROM orders");
    $orders = $data_orders->fetchAll(PDO::FETCH_ASSOC);    
?>