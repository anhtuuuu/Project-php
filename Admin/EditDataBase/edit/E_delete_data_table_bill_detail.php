<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_tables_bill_detail.php";    

    // echo "connected";
   
    $id = $_GET['id'];
        // echo $a;
    $sql = $conn->prepare("update data_table_bill_detail set status = 'Unpaid' where bill_detail_ID = ?;");
    $sql->execute([$id]);
    echo '<h2 style="color: #34a853"> Delete successful bill detail </h2> ';
    echo "<a href='{$level}pages/tables-data-bill-detail.php'> Return to table data </a>"
?>