<?php 
    $level ="../../";
    include_once "{$level}Database/dashboard/list_data_topSelling.php";    

    // echo "connected";
   
    $id = $_GET['id'];
        // echo $a;
    $sql = $conn->prepare("update data_table_products set status = 'In stock' where id = ?;");
    $sql->execute([$id]);
    echo '<h2 style="color: #34a853"> Restore successful products </h2> ';
    echo "<a href='{$level}index.php'> Return to homepage </a>"
?>