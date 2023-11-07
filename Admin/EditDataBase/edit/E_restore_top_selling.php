<?php 
    $level ="../../";
    include_once "{$level}Database/dashboard/list_data_topSelling.php";    

    // echo "connected";
   
    $id = $_GET['id'];
        // echo $a;
    $sql = $conn->prepare("update data_table_products set status = 'In stock' where id = ?;");
    $sql->execute([$id]);
    header("location:{$level}pages/tables-data-product.php")

?>