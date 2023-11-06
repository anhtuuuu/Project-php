<?php   
    // echo "connected";
    include_once "{$level}Database/connect_database.php";
    $data_rcs = $conn->query("SELECT * FROM data_table_products");
    $topSelling = $data_rcs->fetchAll(PDO::FETCH_ASSOC);    
?>