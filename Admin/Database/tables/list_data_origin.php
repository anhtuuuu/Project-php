<?php   
    include_once "{$level}Database/connect/connect_database.php";
    $data_origin = $conn->query("SELECT * FROM origin");
    $origins = $data_origin->fetchAll(PDO::FETCH_ASSOC);    
?>