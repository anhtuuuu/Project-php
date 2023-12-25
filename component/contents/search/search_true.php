<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="<?php echo $level ?>index.php">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Search</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->




<!--new product area start-->
<div class="new_product_area product_page">
    <div class="row">
        <div class="col-12">
            <div class="block_title">
                <h3> <?php echo  $row['category_count'] ?> other products :</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="product_active owl-carousel">
            <?php foreach ($product_category as $category) : ?>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="<?php echo $level ?>pages\single-product.php?id=<?php echo $category['id'] ?>"><img src="<?php echo $level ?>assets\img\product\<?php echo $category['thumbnail'] ?>" alt=""></a>
                            <div class="img_icone">
                                <img src="<?php echo $level ?>assets\img\cart\span-<?php echo $category['id'] % 2 == 0 ? 'hot' : 'new' ?>.png" alt="">
                            </div>
                            <div class="product_action">
                                <a href="<?php echo $level ?>pages\single-product.php"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <span class="product_price">$<?php echo $category['price'] ?></span>
                            <h3 class="product_title"><a href="<?php echo $level ?>pages\single-product.php"><?php echo $category['title'] ?></a></h3>
                        </div>
                        <div class="product_info">
                            <ul>
                                <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php for ($i = 1; $i <= $totalPages; $i++) {
 echo "<a href='search.php?page={$i}'>{$i}</a> ";
}
?>
<!--new product area start-->


<!--new product area start-->
<div class="new_product_area product_page">
    <div class="row">
        <div class="col-12">
            <div class="block_title">
                <h3> Related Products</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="product_active owl-carousel">
            <?php foreach ($result as $pda) : ?>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="<?php echo $level ?>pages\single-product.php?id=<?php echo $pda['id'] ?>"><img src="<?php echo $level ?>assets\img\product\<?php echo $pda['thumbnail'] ?>" alt=""></a>
                            <div class="img_icone">
                                <img src="<?php echo $level ?>assets\img\cart\span-<?php echo $pda['id'] % 2 == 0 ? 'hot' : 'new' ?>.png" alt="">
                            </div>
                            <div class="product_action">
                                <a href="<?php echo $level ?>pages\single-product.php"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <span class="product_price"><?php echo $pda['price'] ?></span>
                            <h3 class="product_title"><a href="<?php echo $level ?>pages\single-product.php"><?php echo $pda['title'] ?></a></h3>
                        </div>
                        <div class="product_info">
                            <ul>
                                <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!--new product area start-->