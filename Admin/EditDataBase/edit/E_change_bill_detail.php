<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_tables_bill_detail.php";    

    // echo "connected";

    $quantity = $_POST['quantity'];
   
   
    $sql = $conn->prepare("update data_table_bill_detail set quantity=? where bill_detail_ID = ?");
    $sql->execute([$quantity]);
    // header("location:{$level}pages/tables-data-bill-detail.php")

?>