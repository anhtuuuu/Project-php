<?php
// Assuming $conn is your PDO connection

if (isset($_POST['btn_search'])) {
    $noidung_search = $_POST['noidung_search'];
}

// Prepare the statement to search for products with a title containing the given search term
$sql = $conn->prepare("SELECT * FROM product WHERE title LIKE ?");
$sql->execute(["%" . $noidung_search . "%"]);

// Fetch all matching products
$product_category = $sql->fetchAll(PDO::FETCH_ASSOC);

// Define variables
$category_id;
$title;
$price;
$quantity;
$thumbnail;
$description;

if (empty($noidung_search) || empty($product_category)) {
    include "search_false.php";
} else {
    // Loop through the results to get the details of the first matching product
    foreach ($product_category as $us) {
        if ($us['title'] == $noidung_search) {
            $category_id = $us['category_id'];
            $title = $us['title'];
            $price = $us['price'];
            $quantity = $us['quantity'];
            $thumbnail = $us['thumbnail'];
            $description = $us['description'];
        }
    }

    // Use a prepared statement to retrieve products in the same category
    $sql_category = $conn->prepare("SELECT * FROM product WHERE category_id = ?");
    $sql_category->execute([$category_id]);
    
    // Fetch all products in the same category
    $categorys = $sql_category->fetchAll(PDO::FETCH_ASSOC);

    // Use a prepared statement to count the distinct categories
    $sql_count_categories = "SELECT COUNT(DISTINCT category_id) AS category_count FROM product";

    // Execute the statement
    $stmt = $conn->query($sql_count_categories);

    // Fetch the result
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $category_count = $row['category_count'];

    include "search_true.php";
}
?>
