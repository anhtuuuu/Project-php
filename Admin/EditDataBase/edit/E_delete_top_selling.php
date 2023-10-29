<?php 
    $level ="../../";
    include_once "{$level}Database/dashboard/list_data_topSelling.php";    

    // echo "connected";
   
    $id = $_GET['id'];
        // echo $a;
    $sql = $conn->prepare("update dashboard_topselling set status = 'Out of stock' where id = ?;");
    $sql->execute([$id]);
    echo '<h2 style="color: #34a853"> Deleted successful products </h2> ';
    echo "<a href='{$level}index.php'> Return to homepage </a>"
?>