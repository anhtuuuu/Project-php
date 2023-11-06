<?php 
    $level ="../../";
    include_once "{$level}Database/dashboard/list_data_recentSales.php";    

    // echo "connected";
   
    $id = $_GET['id'];
        // echo $a;
    $sql = $conn->prepare("update data_table_bills set status = 'Rejected' where id = ?;");
    $sql->execute([$id]);
    echo '<h2 style="color: #34a853"> Deleted successful products </h2> ';
    echo "<a href='{$level}index.php'> Return to homepage </a>"
?>