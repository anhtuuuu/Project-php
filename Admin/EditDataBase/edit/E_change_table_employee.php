<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_tables_employee.php";    

    // echo "connected";
    $id = $_GET['id'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $age = $_POST['age'];
    $startdate = $_POST['startdate'];
   
    $sql = $conn->prepare("update data_table_employee_management set name = ?, position = ?, age = ?, startdate = ? where id = ?");
    $sql->execute([$name,$position,$age,$startdate,$id]);

   header("location:{$level}pages/tables-data-employee.php")
    

?>