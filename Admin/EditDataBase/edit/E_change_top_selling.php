<?php 
    $level ="../../";
    include_once "{$level}Database/dashboard/list_data_topSelling.php";    

    // echo "connected";
    $id = $_GET['id'];
    $preview = basename($_FILES['preview']['name']);
    $target_file = "{$level}../uploads/".$preview;
    move_uploaded_file($_FILES['preview']['tmp_name'],$target_file);

    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $manufacturing_country = $_POST['manufacturing_country'];
    $type = $_POST['type'];
   if($preview != '') {
    $sql = $conn->prepare("update data_table_products set preview = ?, product_name = ?, price = ?, manufacturing_country = ?, type = ?  where id = ?");
    $sql->execute([$preview,$product_name,$price,$manufacturing_country,$type,$id]);
   }
   else{
    $sql = $conn->prepare("update data_table_products set product_name = ?, price = ?, manufacturing_country = ?, type = ?  where id = ?");
    $sql->execute([$product_name,$price,$manufacturing_country,$type,$id]);
   }
    
   header("location:{$level}pages/tables-data-product.php")

?>