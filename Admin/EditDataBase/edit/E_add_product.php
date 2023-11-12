<?php
    $level = "../../";
    include_once "{$level}Database/tables/list_data_product.php";   
    
    $next_id = count($product) + 1;
    $category_id = $_POST['category_id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $created_at = date('Y-m-d H:i:s'); 
    $updated_at = date('Y-m-d H:i:s'); 
    $status_default = 1;       
    echo $category_id;
    $thumbnail = basename($_FILES['thumbnail']['name']);    
    $target_file = "{$level}../uploads/".$thumbnail;
    move_uploaded_file($_FILES['thumbnail']['tmp_name'],$target_file);

    $st = $conn->prepare("insert into product values(?,?,?,?,?,?,?,?,?,?)");
    $st->execute([$next_id,$category_id,$title,$price,$quantity,$thumbnail,$description,$created_at,$updated_at,$status_default]);

    header("location:{$level}pages/table-data-product.php")

?>