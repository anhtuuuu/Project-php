<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_tables_employee.php";    

    // echo "connected";
   
    $id = $_GET['id'];
        // echo $a;
    $sql = $conn->prepare("update data_table_employee_management set status = 'Working' where id = ?;");
    $sql->execute([$id]);

   header("location:{$level}pages/tables-data-employee.php")

?>