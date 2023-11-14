<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_category.php";    

    // echo "connected";
    $id = $_GET['id'];
    $name = $_POST['name'];
   
    $sql = $conn->prepare("update category set name = ? where id = ?");
    $sql->execute([$name,$id]);

    header("location:{$level}pages/table-data-category.php")    

?>