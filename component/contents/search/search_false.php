
 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
     <div class="row">
         <div class="col-12">
             <div class="breadcrumb_content">
                 <ul>
                     <li><a href="<?php echo $level?>index.php">home</a></li>
                     <li><i class="fa fa-angle-right"></i></li>
                     <li>No results were found</li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
 <!--breadcrumbs area end-->
 <h3 style="font-weight: 100;">Sorry, Poscorn couldn't find any results matching the keyword </h3>
<strong style="display: flex;
    flex-direction: column;
    align-items: center;">To find more accurate results, please:</strong>
    <ol style="display: flex;
    flex-direction: column;
    align-items: center;">
        <li>Check the spelling of the entered keyword</li>
        <li>Try again with a different keyword</li>
        <li>Try again with more general keywords</li>
        <li>Try again with shorter keywords</li>
    </ol>

 <!--product wrapper start-->

 <!--new product area start-->
 <div class="new_product_area product_two">
        <div class="row">
            <div class="col-12">
                <div class="block_title">
                <h3>  New Products</h3>
            </div>
            </div> 
        </div>
        <div class="row">
            <div class="single_p_active owl-carousel">
                <?php
                    foreach($product as $pd):
                ?>
                <div class="col-lg-3">
                    <div class="single_product">
                        <div class="product_thumb">
                            <a href="<?php echo $level?>pages\single-product.php?id=<?php echo $pd['id'] ?>"><img src="<?php echo $level?>uploads/<?php echo $pd['thumbnail'] ?>" alt=""></a> 
                            <div class="img_icone">
                                <img src="<?php echo $level?>assets\img\cart\span-new.png" alt="">
                            </div>
                            <div class="product_action">
                                <a href="<?php echo $level?>pages\single-product.php?id=<?php echo $pd['id'] ?>"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class="product_content">
                            <span class="product_price">$50.00</span>
                            <h3 class="product_title"><a href="<?php echo $level?>pages\single-product.php?id=<?php echo $pd['id'] ?>"><?php echo $pd['title'] ?></a></h3>
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