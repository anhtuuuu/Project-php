<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "product_information_db";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Thiết lập chế độ lỗi
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Kết nối thành công";
    } catch(PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
    }
?>
    
