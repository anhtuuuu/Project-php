<?php
    $level ="../../";    
    include_once "{$level}Database/tables/list_data_orders.php";    

   
    $id = $_GET['id'];
        
    $sql = $conn->prepare("update orders set status = 0 where id = ?;");
    $sql->execute([$id]);

   header("location:{$level}pages/my-account.php?note=2");
?>