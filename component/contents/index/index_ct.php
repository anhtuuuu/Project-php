<!--pos home section-->
<div class=" pos_home_section">
    <div class="row pos_home">
        <div class="col-lg-3 col-md-8 col-12">
            <!--sidebar banner-->
            <div class="sidebar_widget banner mb-35">
                <div class="banner_img mb-35">
                    <a href="#"><img src="<?php echo $level?><?php echo $level?>assets\img\banner\banner5.jpg" alt=""></a>
                </div>
                <div class="banner_img">
                    <a href="#"><img src="<?php echo $level?><?php echo $level?>assets\img\banner\banner6.jpg" alt=""></a>
                </div>
            </div>
            <!--sidebar banner end-->

            <!--categorie menu start-->
            <div class="sidebar_widget catrgorie mb-35">
                <h3>Categories</h3>
                <ul>
                    <?php 
                        $categorie = array(
                            array(
                                'title' => 'Women',
                                'menu' => array('Accessories','Dresses','Tops','HandBags'),
                                'item' => array('Accessories','Dresses','Tops','HandBags'),
                            ),
                            array(
                                'title' => 'Men',
                                'menu' => array('Accessories','Dresses','Tops','HandBags'),
                                'item' => array('Accessories','Dresses','Tops','HandBags'),
                            ),
                            array(
                                'title' => 'Footwear',
                                'menu' => array('Accessories','Dresses','Tops','HandBags'),
                                'item' => array('Accessories','Dresses','Tops','HandBags'),
                            ),
                            array(
                                'title' => 'Jewelry',
                                'menu' => array('Accessories','Dresses','Tops','HandBags'),
                                'item' => array('Accessories','Dresses','Tops','HandBags'),
                            ),
                            array(
                                'title' => 'Lady',
                                'menu' => array('Accessories','Dresses','Tops','HandBags'),
                                'item' => array('Accessories','Dresses','Tops','HandBags'),
                            )
                        )
                    ?>
                    <?php foreach($categorie as $cat): ?>
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
                <?php 
                    $carts = array(
                        array(
                            'link' => 'cart',
                            'name' => 'lorem ipsum dolor',
                            'price' => '$115.00',
                            'quanity' => 'Qty: 1'
                        ),
                        array(
                            'link' => 'cart2',
                            'name' => 'Quisque ornare dui',
                            'price' => '$105.00',
                            'quanity' => 'Qty: 1'
                        )
                    )
                ?>
                <?php foreach($carts as $cart):?>
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="#"><img src="<?php echo $level?><?php echo $level?>assets\img\cart\<?php echo $cart['link']?>.jpg"
                                alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="#"><?php echo $cart['name']?></a>
                        <span class="cart_price"><?php echo $cart['price']?></span>
                        <span class="quantity"><?php echo $cart['quanity']?></span>
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
                <?php $list_items = array('ipod','sam sung','apple','iphone 5s','superdrive','shuffle','nano','iphone 4s','canon')?>
                <div class="block_tags">
                    <?php 
                        foreach($list_items as $list)
                        {
                            echo '<a href="#">'.$list.'</a>';
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
                    <a href="#"><img src="<?php echo $level?><?php echo $level?>assets\img\banner\banner9.jpg" alt=""></a>
                </div>
            </div>
            <!--sidebar banner end-->



        </div>
        <div class="col-lg-9 col-md-12">
            <!--banner slider start-->
            <div class="banner_slider slider_1">
                <div class="slider_active owl-carousel">
                    <div class="single_slider" style="background-image: url(assets/img/slider/slide_1.png)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>Women's Fashion</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider" style="background-image: url(assets/img/slider/slider_2.png)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>New Collection</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider" style="background-image: url(assets/img/slider/slider_3.png)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1>Best Collection</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
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
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product1.jpg" alt=""></a>
                                    <div class="img_icone">
                                        <img src="<?php echo $level?><?php echo $level?>assets\img\cart\span-new.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$50.00</span>
                                    <h3 class="product_title"><a href="single-product.php">Curabitur sodales</a></h3>
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
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product2.jpg" alt=""></a>
                                    <div class="hot_img">
                                        <img src="<?php echo $level?><?php echo $level?>assets\img\cart\span-hot.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$40.00</span>
                                    <h3 class="product_title"><a href="single-product.php">Quisque ornare dui</a></h3>
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
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product3.jpg" alt=""></a>
                                    <div class="img_icone">
                                        <img src="<?php echo $level?><?php echo $level?>assets\img\cart\span-new.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$60.00</span>
                                    <h3 class="product_title"><a href="single-product.php">Sed non turpiss</a></h3>
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
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product4.jpg" alt=""></a>
                                    <div class="hot_img">
                                        <img src="<?php echo $level?><?php echo $level?>assets\img\cart\span-hot.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$65.00</span>
                                    <h3 class="product_title"><a href="single-product.php">Duis convallis</a></h3>
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
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product6.jpg" alt=""></a>
                                    <div class="img_icone">
                                        <img src="<?php echo $level?><?php echo $level?>assets\img\cart\span-new.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$50.00</span>
                                    <h3 class="product_title"><a href="single-product.php">Curabitur sodales</a></h3>
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
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product7.jpg" alt=""></a>
                                    <div class="hot_img">
                                        <img src="<?php echo $level?><?php echo $level?>assets\img\cart\span-hot.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$60.00</span>
                                    <h3 class="product_title"><a href="single-product.php">Maecenas sit amet</a></h3>
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
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product8.jpg" alt=""></a>
                                    <div class="img_icone">
                                        <img src="<?php echo $level?><?php echo $level?>assets\img\cart\span-new.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$50.00</span>
                                    <h3 class="product_title"><a href="single-product.php">Sed non turpis</a></h3>
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
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product9.jpg" alt=""></a>
                                    <div class="img_icone">
                                        <img src="<?php echo $level?><?php echo $level?>assets\img\cart\span-new.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$70.00</span>
                                    <h3 class="product_title"><a href="single-product.php">Donec ac congue</a></h3>
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
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product3.jpg" alt=""></a>
                                    <div class="hot_img">
                                        <img src="<?php echo $level?><?php echo $level?>assets\img\cart\span-hot.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$60.00</span>
                                    <h3 class="product_title"><a href="single-product.php">Curabitur sodales</a></h3>
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
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product2.jpg" alt=""></a>
                                    <div class="img_icone">
                                        <img src="<?php echo $level?><?php echo $level?>assets\img\cart\span-new.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$50.00</span>
                                    <h3 class="product_title"><a href="single-product.php">Phasellus a arcu</a></h3>
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
                    </div>
                </div>
            </div>
            <!--featured product end-->

            <!--banner area start-->
            <div class="banner_area mb-60">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single_banner">
                            <a href="#"><img src="<?php echo $level?><?php echo $level?>assets\img\banner\banner7.jpg" alt=""></a>
                            <div class="banner_title">
                                <p>Up to <span> 40%</span> off</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single_banner">
                            <a href="#"><img src="<?php echo $level?><?php echo $level?>assets\img\banner\banner8.jpg" alt=""></a>
                            <div class="banner_title title_2">
                                <p>sale off <span> 30%</span></p>
                            </div>
                        </div>
                    </div>
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
                        <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="<?php echo $level?><?php echo $level?>assets\img\brand\brand1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="<?php echo $level?><?php echo $level?>assets\img\brand\brand2.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="<?php echo $level?><?php echo $level?>assets\img\brand\brand3.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="<?php echo $level?><?php echo $level?>assets\img\brand\brand4.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="<?php echo $level?><?php echo $level?>assets\img\brand\brand5.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="<?php echo $level?><?php echo $level?>assets\img\brand\brand6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--brand logo end-->
        </div>
    </div>
</div>
<!--pos home section end-->