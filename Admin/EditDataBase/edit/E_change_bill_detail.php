<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_tables_bill_detail.php";    

    // echo "connected";
    $bill_detail_ID = $_GET['bill_detail_ID'];
    $bill_ID = $_POST['bill_ID'];
    $product_ID = $_POST['product_ID'];
   
   
    $sql = $conn->prepare("update data_table_bill_detail set bill_ID = ?, product_ID = ?, quantity=? where bill_detail_ID = ?");
    $sql->execute([$bill_ID,$product_ID,$quantity,$bill_detail_ID]);

    header("location:{$level}pages/tables-data-bill-detail.php")

?>