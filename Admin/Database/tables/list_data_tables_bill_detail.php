<?php   
    // echo "connected";
    include_once "{$level}Database/connect_database.php";
    $data_tables_bill_detail = $conn->query("SELECT * FROM data_table_bill_detail");
    $clients = $data_tables_bill_detail->fetchAll(PDO::FETCH_ASSOC);    
?>