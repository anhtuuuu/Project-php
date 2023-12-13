<?php 
    include("conn.php");

    
       //---------------------------------- Truy vấn SQL
       //Truy vấn product
       $stmt = $conn_sale_manager->prepare("SELECT * FROM product ");
       $stmt->execute();
      //Truy vấn product_slider
       $stmt_slide = $conn_product_info->prepare("SELECT * FROM product_slider");
       $stmt_slide->execute();
      //Truy vấn categories
       $categorie = $conn_product_info->prepare("SELECT * FROM categories");
       $categorie->execute();
     //Truy vấn cart
       $carts= $conn_product_info->prepare("SELECT * FROM product_information_tb WHERE product_style LIKE N'%cart%'");
       $carts->execute();
      //Truy vấn items
       $list_items = $conn_product_info->prepare("SELECT * FROM items");
       $list_items->execute();
      //truy vấn banners
       $banner_area = $conn_product_info->prepare("SELECT * FROM banners");
       $banner_area->execute();
       //truy vấn brands
       $brand_link = $conn_product_info->prepare("SELECT * FROM brands");
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
      ///-----------------------------------------------------------------
    
?>
 <?php   
     

      $data_product = $conn->query("SELECT * FROM product");
      $product = $data_product->fetchAll(PDO::FETCH_ASSOC);    
  ?>