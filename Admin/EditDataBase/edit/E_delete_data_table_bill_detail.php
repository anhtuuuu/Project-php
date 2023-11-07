<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_tables_bill_detail.php";    

    // echo "connected";
   
    $id = $_GET['id'];
        // echo $a;
    $sql = $conn->prepare("update data_table_bill_detail set status = 'Unpaid' where bill_detail_ID = ?;");
    $sql->execute([$id]);
    header("location:{$level}pages/tables-data-bill-detail.php")

?>