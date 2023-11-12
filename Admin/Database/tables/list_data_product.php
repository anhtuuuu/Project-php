<?php   
    include_once "{$level}Database/connect/connect_database.php";
    $data_product = $conn->query("SELECT * FROM product");
    $product = $data_product->fetchAll(PDO::FETCH_ASSOC);    
?>