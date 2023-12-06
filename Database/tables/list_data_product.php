<?php   
    include_once "{$level}Database/connect/connect_database.php";
    $data_product = $conn->query("SELECT * FROM product where deleted = '1'");
    $product = $data_product->fetchAll(PDO::FETCH_ASSOC);    
?>