<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname_product_info = "product_information_db";
    
    try {
        $conn_product_info = new PDO("mysql:host=$servername;dbname=$dbname_product_info", $username, $password);
        // Thiết lập chế độ lỗi
        $conn_product_info->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Kết nối thành công";
    } catch(PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
    }
?>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname_sale_manager = "sale_manager";
    
    try {
        $conn_sale_manager = new PDO("mysql:host=$servername;dbname=$dbname_sale_manager", $username, $password);
        // Thiết lập chế độ lỗi
        $conn_sale_manager->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Kết nối thành công";
    } catch(PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
    }

?>
<?php 
    $conn = new PDO("mysql:host=localhost;dbname=sale_manager;charset=utf8","root","");   
?>