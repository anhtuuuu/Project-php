<?php 
    $level ="../../";
    include_once "{$level}Database/dashboard/list_data_recentSales.php";    

    // echo "connected";
    $id = $_GET['id'];
    $customer = $_POST['customer'];
    $product = $_POST['product'];
    $price = $_POST['price'];
   
    $sql = $conn->prepare("update data_table_bills set customer = ?, product = ?, price = ? where id = ?");
    $sql->execute([$customer,$product,$price,$id]);

    header("location:{$level}pages/tables-data-orders.php")

?>