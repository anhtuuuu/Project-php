<?php 
    $level ="../../";
    include_once "{$level}Database/dashboard/list_data_topSelling.php";    

    // echo "connected";
    $id = $_GET['id'];
    $preview = basename($_FILES['preview']['name']);
    $product = $_POST['product'];
    $price = $_POST['price'];
    $sold = $_POST['sold'];
    $revenue = $_POST['revenue'];
   
    $sql = $conn->prepare("update dashboard_topselling set preview = ?, product = ?, price = ?, sold = ?, revenue = ?  where id = ?");
    $sql->execute([$preview,$product,$price,$sold,$revenue,$id]);
    echo '<h2 style="color: #34a853"> Changed successful products </h2> ';
    echo "<a href='{$level}index.php'> Return to homepage </a>"
?>