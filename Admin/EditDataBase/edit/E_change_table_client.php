<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_tables_client.php";    

    // echo "connected";
    $id = $_GET['id'];
    $name = $_POST['name'];
    $password = $_POST['address'];
    $email = $_POST['phone'];
    $startdate = $_POST['startdate'];
   
    $sql = $conn->prepare("update data_table_client_management set name = ?, address = ?, phone = ?, startdate = ? where id = ?");
    $sql->execute([$name,$password,$email,$startdate,$id]);

    header("location:{$level}pages/tables-data-client.php")

?>