<?php

include_once "{$level}Database/tables/list_data_category.php";
include_once "{$level}Database/tables/list_data_origin.php";

?>

<form action="<?php echo $level ?>pages\search.php" method="post" class="my-4">
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="" class="text-secondary">---Choose category---</option>
                <?php foreach ($category as $ctgr) { ?>
                    <option value="<?php echo $ctgr['id'] ?>"><?php echo $ctgr['name'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group col-md-2">
            <label for="origin_id">Origins:</label>
            <select name="origin_id" id="origin_id" class="form-control">
                <option value="" class="text-secondary">---Choose origins---</option>
                <?php foreach ($origins as $origin) { ?>
                    <option value="<?php echo $origin['origin_id'] ?>"><?php echo $origin['country'] ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group col-md-2">
            <label for="min_price">Min Price:</label>
            <select name="min_price" id="min_price" class="form-control">
                <option value="" class="text-secondary">Choose min price</option>
                <option value="10">10</option>
                <option value="50">50</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <div class="form-group col-md-2">
            <label for="max_price">Max Price:</label>
            <select name="max_price" id="max_price" class="form-control">
                <option value="" class="text-secondary">Choose max price</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="999999">Unlimited</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <div class="col-md-2">
            <label class="invisible">Search</label>
            <button style="border-radius: 5px;" type="submit" class="btn btn-primary btn-block" name="btn_search">Search</button>
        </div>
    </div>
</form>


<?php
$_SESSION['noidung_search'] = isset($_POST['noidung_search']) ? $_POST['noidung_search'] : '';
$_SESSION['category_search'] = isset($_POST['category_id']) ? $_POST['category_id'] : '';
$_SESSION['origin_search'] = isset($_POST['origin_id']) ? $_POST['origin_id'] : '';
$_SESSION['min_price_search'] = isset($_POST['min_price']) ? $_POST['min_price'] : '';
$_SESSION['max_price_search'] = isset($_POST['max_price']) ? $_POST['max_price'] : '';
echo $_SESSION['category_search'].'2111111111111';
if (isset($_POST['btn_search'])) {
    $noidung_search = isset($_SESSION['noidung_search']) ? $_SESSION['noidung_search'] : '';
    $category_search = isset($_SESSION['category_search']) ? $_SESSION['category_search'] : '';
    $origin_search = isset($_SESSION['origin_search']) ? $_SESSION['origin_search'] : '';
    $min_price_search = isset($_SESSION['min_price_search']) ? $_SESSION['min_price_search'] : '';
    $max_price_search = isset($_SESSION['max_price_search']) ? $_SESSION['max_price_search'] : '';
}

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$itemsPerPage = 4;
$offset = ($currentPage - 1) * $itemsPerPage;
// Build the base SQL query for both counting and fetching products
$sql_base_query = "SELECT * FROM product";

// Add conditions for title, category, origin, and price if they are set
$sql_params = [];
$count_params = [];

if ($noidung_search !== '') {
    $sql_base_query .= " WHERE title COLLATE utf8_unicode_ci LIKE ?";
    $sql_params[] = "%" . $noidung_search . "%";
    $count_params[] = "%" . $noidung_search . "%";
}

if ($category_search !== '') {
    $sql_base_query .= ($noidung_search !== '') ? " AND" : " WHERE";
    $sql_base_query .= " category_id = ?";
    $sql_params[] = $category_search;
    $count_params[] = $category_search;
}

if ($origin_search !== '') {
    $sql_base_query .= ($noidung_search !== '' || $category_search !== '') ? " AND" : " WHERE";
    $sql_base_query .= " origin_id = ?";
    $sql_params[] = $origin_search;
    $count_params[] = $origin_search;
}

if ($min_price_search !== '') {
    $sql_base_query .= ($noidung_search !== '' || $category_search !== '' || $origin_search !== '') ? " AND" : " WHERE";
    $sql_base_query .= " price >= ?";
    $sql_params[] = $min_price_search;
    $count_params[] = $min_price_search;
}

if ($max_price_search !== '') {
    $sql_base_query .= ($noidung_search !== '' || $category_search !== '' || $origin_search !== '' || $min_price_search !== '') ? " AND" : " WHERE";
    $sql_base_query .= " price <= ?";
    $sql_params[] = $max_price_search;
    $count_params[] = $max_price_search;
}


// Prepare and execute the SQL query for counting total products
$sql_count_query = "SELECT COUNT(*) AS total FROM (" . $sql_base_query . ") AS counted";
$sql_count = $conn->prepare($sql_count_query);
$sql_count->execute($count_params);

// Fetch the total number of products
$totalProducts = $sql_count->fetchColumn();

// Calculate total pages
$totalPages = ceil($totalProducts / $itemsPerPage);
// Now, proceed with the main SQL query for fetching products with LIMIT and OFFSET
$sql_query = $sql_base_query . " LIMIT {$offset}, {$itemsPerPage}";
echo $sql_query;
// Prepare and execute the SQL query for fetching products with LIMIT and OFFSET
$sql = $conn->prepare($sql_query);
$sql->execute($sql_params);

// Fetch all matching products
$product_category = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
echo "osset ".$offset;

echo $itemsPerPage;
print_r($product_category);
// Define variables
$category_id;
$title;
$price;
$quantity;
$thumbnail;
$description;

if (empty($product_category)) {
    include "search_false.php";
} else {
    // Loop through the results to get the details of the first matching product
   

    foreach ($product_category as $us) {

        $category_id = $us['category_id'];
        $title = $us['title'];
        $price = $us['price'];
        $quantity = $us['quantity'];
        $thumbnail = $us['thumbnail'];
        $description = $us['description'];
    }




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