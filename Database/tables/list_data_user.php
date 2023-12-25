<?php   
    include_once "{$level}Database/connect/connect_database.php";
    $data_user = $conn->query("SELECT * FROM user");
    $user = $data_user->fetchAll(PDO::FETCH_ASSOC);    
?>