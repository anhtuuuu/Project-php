<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_tables_client.php";    

    // echo "connected";
   
    $id = $_GET['id'];
        // echo $a;
    $sql = $conn->prepare("update data_table_client_management set status = 'online' where id = ?;");
    $sql->execute([$id]);
    echo '<h2 style="color: #34a853"> Restore successful client </h2> ';
    echo "<a href='{$level}pages/tables-data-client.php'> Return to table data client </a>"
?>