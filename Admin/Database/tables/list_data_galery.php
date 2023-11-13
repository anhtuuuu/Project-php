<?php   
    include_once "{$level}Database/connect/connect_database.php";
    $data_galery = $conn->query("SELECT * FROM galery");
    $galery = $data_galery->fetchAll(PDO::FETCH_ASSOC);    
?>