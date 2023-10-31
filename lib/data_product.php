<?php 
    include("conn.php");

    
       //---------------------------------- Truy vấn SQL
       //Truy vấn product
       $stmt = $conn->prepare("SELECT * FROM product_information_tb WHERE product_style LIKE N'%product%'");
       $stmt->execute();
      //Truy vấn product_slider
       $stmt_slide = $conn->prepare("SELECT * FROM product_slider");
       $stmt_slide->execute();
      //Truy vấn categories
       $categorie = $conn->prepare("SELECT * FROM categories");
       $categorie->execute();
     //Truy vấn cart
       $carts= $conn->prepare("SELECT * FROM product_information_tb WHERE product_style LIKE N'%cart%'");
       $carts->execute();
      //Truy vấn items
       $list_items = $conn->prepare("SELECT * FROM items");
       $list_items->execute();
      //truy vấn banners
       $banner_area = $conn->prepare("SELECT * FROM banners");
       $banner_area->execute();
       //truy vấn brands
       $brand_link = $conn->prepare("SELECT * FROM brands");
       $brand_link->execute();
       //-------------------------------- Lấy kết quả
       //kết quả product
       $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       //kết quả product_slider
       $result_slide= $stmt_slide->fetchAll(PDO::FETCH_ASSOC);
       //kết quả categorie
       $result_categorie=$categorie->fetchAll(PDO::FETCH_ASSOC);
        //kết quả carts
       $result_carts=$carts->fetchAll(PDO::FETCH_ASSOC);
        //kết quả list_iteam
       $result_list_items=$list_items->fetchAll(PDO::FETCH_ASSOC);
        //kết quả banner_area
       $result_banner_area=$banner_area->fetchAll(PDO::FETCH_ASSOC);
        //kết qua brand_link
       $result_brand_link=$brand_link->fetchAll(PDO::FETCH_ASSOC);
      
?>