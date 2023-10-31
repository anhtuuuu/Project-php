<?php 
    if(isset($_POST['btn_search'])){
        $noidung_search = $_POST['noidung_search'];
    }

    $stmt = $conn->prepare("SELECT * FROM product_information_tb WHERE product_name LIKE N'%$noidung_search%'");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(empty($result)){
        include "search_false.php";
    }else{
        foreach($result as $dataSearch)
    {
        
            $product_name = $dataSearch['product_name'];
            $product_image =  $dataSearch['product_image'];
            $price =  $dataSearch['price'];
            $span=$dataSearch['span'];
            $quanity=$dataSearch['quanity'];

    }
        include "search_true.php";
    }
    
  
?>
