<?php   
    include_once "{$level}Database/connect/connect_database.php";
    $data_role = $conn->query("SELECT * FROM role");
    $role = $data_role->fetchAll(PDO::FETCH_ASSOC);    
?>