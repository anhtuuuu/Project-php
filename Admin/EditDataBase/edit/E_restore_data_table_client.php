<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_tables_client.php";    

    // echo "connected";
   
    $id = $_GET['id'];
        // echo $a;
    $sql = $conn->prepare("update data_table_client_management set status = 'online' where id = ?;");
    $sql->execute([$id]);
   header("location:{$level}pages/tables-data-client.php")

    
?>