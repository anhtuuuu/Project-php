<?php   
    // echo "connected";
    include_once "{$level}Database/connect_database.php";
    $data_tables_employee = $conn->query("SELECT * FROM data_table_employee_management");
    $employee = $data_tables_employee->fetchAll(PDO::FETCH_ASSOC);    
?>