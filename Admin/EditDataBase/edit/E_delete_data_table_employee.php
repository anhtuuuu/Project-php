<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_tables_employee.php";    

    // echo "connected";
   
    $id = $_GET['id'];
        // echo $a;
    $sql = $conn->prepare("update data_table_employee_management set status = 'Fired' where id = ?;");
    $sql->execute([$id]);
    echo '<h2 style="color: #34a853"> Delete successful employee </h2> ';
    echo "<a href='{$level}pages/tables-data-employee.php'> Return to table data </a>"
?>