<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_product.php";    

    // echo "connected";
    $id = $_GET['id'];
    $thumbnail = basename($_FILES['thumbnail']['name']);
    $target_file = "{$level}../uploads/".$thumbnail;
    move_uploaded_file($_FILES['thumbnail']['tmp_name'],$target_file);

    $category_id = $_POST['category_id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description']; 
    $get_date_time = date('Y-m-d H:i:s');  

   if($thumbnail != '') {    
    $sql = $conn->prepare("update product set category_id = ?, title = ?, price = ?, quantity = ?,thumbnail = ?, description = ?, updated_at = ?  where id = ?");
    $sql->execute([$category_id,$title,$price,$quantity,$thumbnail,$description,$get_date_time,$id]);        
   }
   else{    
    $sql = $conn->prepare("update product set category_id = ?, title = ?, price = ?, quantity = ?, description = ?, updated_at = ?  where id = ?");
    $sql->execute([$category_id,$title,$price,$quantity,$description,$get_date_time,$id]);
    }   
    
   header("location:{$level}pages/table-data-product.php")

?>