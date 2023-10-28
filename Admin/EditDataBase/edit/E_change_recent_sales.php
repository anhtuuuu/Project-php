<?php 
    $level ="../../";
    include_once "{$level}Database/dashboard/list_data_recentSales.php";    

    // echo "connected";
    $id = $_GET['id'];
    $customer = $_POST['customer'];
    $product = $_POST['product'];
    $price = $_POST['price'];
   
    $sql = $conn->prepare("update dashboard_recentsales set customer = ?, product = ?, price = ? where id = ?");
    $sql->execute([$customer,$product,$price,$id]);
    echo '<h2 style="color: #34a853"> Changed successful products </h2> ';
    echo "<a href='{$level}index.php'> Return to homepage </a>"
?>