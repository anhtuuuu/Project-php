<?php   
    // echo "connected";
    include_once "{$level}Database/connect_database.php";
    $data_tables_client = $conn->query("SELECT * FROM data_table_client_management");
    $clients = $data_tables_client->fetchAll(PDO::FETCH_ASSOC);    
?>