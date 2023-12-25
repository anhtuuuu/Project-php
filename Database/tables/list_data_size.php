<?php   
    include_once "{$level}Database/connect/connect_database.php";
    $data_size = $conn->query("SELECT * FROM size");
    $size = $data_size->fetchAll(PDO::FETCH_ASSOC);    
?>