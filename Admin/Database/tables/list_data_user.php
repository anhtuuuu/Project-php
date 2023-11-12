<?php   
    include_once "{$level}Database/connect/connect_database.php";
    $data_tables_user = $conn->query("SELECT * FROM user");
    $user = $data_tables_user->fetchAll(PDO::FETCH_ASSOC);    
?>