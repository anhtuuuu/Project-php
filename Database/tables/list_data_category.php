<?php   
    include_once "{$level}Database/connect/connect_database.php";
    $data_category = $conn->query("SELECT * FROM category");
    $category = $data_category->fetchAll(PDO::FETCH_ASSOC);    
?>