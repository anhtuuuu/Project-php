<?php 
   include_once("{$level}lib/data_product.php"); 
?>

<!--pos home section-->
<div class=" pos_home_section">
    <div class="row pos_home">
        <div class="col-lg-3 col-md-8 col-12">
            <!--sidebar banner-->
            <div class="sidebar_widget banner mb-35">
                <div class="banner_img mb-35">
                    <a href="#"><img src="<?php echo $level?>assets\img\banner\banner5.jpg" alt=""></a>
                </div>
                <div class="banner_img">
                    <a href="#"><img src="<?php echo $level?>assets\img\banner\banner6.jpg" alt=""></a>
                </div>
            </div>
            <!--sidebar banner end-->

            <!--categorie menu start-->
            <div class="sidebar_widget catrgorie mb-35">
                <h3>Categories</h3>
                <ul>
                    <?php foreach($result_categorie as $cat): ?>
                    <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> <?php echo $cat['title']?></a>
                        <ul class="categorie_sub">
                            <li><a href="#"><i class="fa fa-caret-right"></i> <?php echo $cat['menu'][0]?></a>
                                <ul class="categorie_sub">
                                    <li><a href="#"><i class="fa fa-caret-right"></i> <?php echo $cat['item'][0]?></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> <?php echo $cat['item'][1]?></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> <?php echo $cat['item'][2]?></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i> <?php echo $cat['item'][3]?></a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> <?php echo $cat['menu'][1]?></a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> <?php echo $cat['menu'][2]?></a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> <?php echo $cat['menu'][3]?></a></li>
                        </ul>
                    </li>
                    <?php endforeach;?>

                </ul>
            </div>
            <!--categorie menu end-->

            <!--wishlist block start-->
            <div class="sidebar_widget wishlist mb-35">
                <div class="block_title">
                    <h3><a href="#">Wishlist</a></h3>
                </div>
           
                <?php foreach($result_carts as $cart):?>
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="#"><img src="<?php echo $level?>assets\img\<?php echo $cart['product_image']?>.jpg"
                                alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="#"><?php echo $cart['product_name']?></a>
                        <span class="cart_price">$<?php echo $cart['price']?></span>
                        <span class="quantity">Qty:<?php echo $cart['quanity']?></span>
                    </div>
                    <div class="cart_remove">
                        <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                    </div>
                </div>
                <?php endforeach;?>
                <div class="block_content">
                    <p>2 products</p>
                    <a href="#">» My wishlists</a>
                </div>
            </div>
            <!--wishlist block end-->

            <!--popular tags area-->
            <div class="sidebar_widget tags mb-35">
                <div class="block_title">
                    <h3>popular tags</h3>
                </div>
                <div class="block_tags">
                    <?php 
                        foreach($result_list_items as $list)
                        {
                            echo '<a href="#">'.$list['name'].'</a>';
                        };
                    ?>
                    
                </div>
            </div>
            <!--popular tags end-->

            <!--newsletter block start-->
            <div class="sidebar_widget newsletter mb-35">
                <div class="block_title">
                    <h3>newsletter</h3>
                </div>
                <form action="#">
                    <p>Sign up for your newsletter</p>
                    <input placeholder="Your email address" type="text">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
            <!--newsletter block end-->

            <!--sidebar banner-->
            <div class="sidebar_widget bottom ">
                <div class="banner_img">
                    <a href="#"><img src="<?php echo $level?>assets\img\banner\banner9.jpg" alt=""></a>
                </div>
            </div>
            <!--sidebar banner end-->



        </div>
        <div class="col-lg-9 col-md-12">
            <!--banner slider start-->
            <div class="banner_slider slider_1">
                <div class="slider_active owl-carousel">
                   
                       
                    <?php foreach( $result_slide as $ban):?>
                        <div class="single_slider" style="background-image: url(assets/img/slider/<?php echo $ban['image']?>.png)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1><?php echo $ban['title']?></h1>
                                <p><?php echo $ban['parg']?> </p>
                                <a href="#"><?php echo $ban['button']?></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    
                </div>
            </div>
            <!--banner slider start-->

            <!--new product area start-->
            <div class="new_product_area">
                <div class="block_title">
                    <h3>New Products</h3>
                </div>
                <div class="row">
                    <div class="product_active owl-carousel">
                        <?php foreach($result as $pda): ?>
                            <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="<?php echo $level?>pages\single-product.php"><img
                                            src="<?php echo $level?>assets\img\<?php echo $pda['product_image']?>.jpg" alt=""></a>
                                    <div class="img_icone">
                                        <img src="<?php echo $level?>assets\img\cart\<?php echo $pda['span']?>.png" alt="">
                                    </div>
                                    <div class="product_action">
                                       <a href="<?php echo $level?>pages\single-product.php"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price"><?php echo $pda['price']?></span>
                                    <h3 class="product_title"><a href="<?php echo $level?>pages\single-product.php"><?php echo $pda['product_name']?></a></h3>
                                </div>
                                <div class="product_info">
                                    <ul>
                                        <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                title="Quick view">View Detail</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        
                    </div>
                </div>
            </div>
            <!--new product area start-->

            <!--featured product start-->
            <div class="featured_product">
                <div class="block_title">
                    <h3>Featured Products</h3>
                </div>
                <div class="row">
                    <div class="product_active owl-carousel">
                        <?php foreach($result as $pda): ?>
                            <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="<?php echo $level?>pages\single-product.php"><img
                                            src="<?php echo $level?>assets\img\<?php echo $pda['product_image']?>.jpg" alt=""></a>
                                    <div class="img_icone">
                                        <img src="<?php echo $level?>assets\img\cart\<?php echo $pda['span']?>.png" alt="">
                                    </div>
                                    <div class="product_action">
                                       <a href="<?php echo $level?>pages\single-product.php"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price"><?php echo $pda['price']?></span>
                                    <h3 class="product_title"><a href="<?php echo $level?>pages\single-product.php"><?php echo $pda['product_name']?></a></h3>
                                </div>
                                <div class="product_info">
                                    <ul>
                                        <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#modal_box"
                                                title="Quick view">View Detail</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        
                    </div>
                </div>
            </div>
            <!--featured product end-->

            <!--banner area start-->
            <div class="banner_area mb-60">
                <div class="row">
                    <?php foreach($result_banner_area as $bna):?>
                        <div class="col-lg-6 col-md-6">
                        <div class="single_banner">
                            <a href="#"><img src="<?php echo $level?>assets\img\banner\<?php echo $bna['link']?>.jpg" alt=""></a>
                            <div class="banner_title">
                                <p><?php echo $bna['title']?> <span> <?php echo $bna['sale_ps']?></span></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    
                </div>
            </div>
            <!--banner area end-->

            <!--brand logo strat-->
            <div class="brand_logo mb-60">
                <div class="block_title">
                    <h3>Brands</h3>
                </div>
                <div class="row">
                    <div class="brand_active owl-carousel">
                        <?php
                            foreach($result_brand_link as $brl):
                        ?>
                         <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="<?php echo $level?>assets\img\brand\<?php echo $brl['brand_link']?>.jpg" alt=""></a>
                            </div>
                        </div>
                        <?php endforeach;?>
                        
                    </div>
                </div>
            </div>
            <!--brand logo end-->
        </div>
    </div>
</div>
<!--pos home section end-->