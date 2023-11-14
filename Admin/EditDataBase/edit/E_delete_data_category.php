<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_category.php";    
   
    $id = $_GET['id'];
 
    $sql = $conn->prepare("delete from category where id = ?;");
    $sql->execute([$id]);
    header("location:{$level}pages/table-data-category.php")
?>