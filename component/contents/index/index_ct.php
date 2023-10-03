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
                        <a href="#"><img src="<?php echo $level?>assets\img\cart\<?php echo $cart['link']?>.jpg"
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
                    <a href="#"><img src="<?php echo $level?>assets\img\banner\banner9.jpg" alt=""></a>
                </div>
            </div>
            <!--sidebar banner end-->



        </div>
        <div class="col-lg-9 col-md-12">
            <!--banner slider start-->
            <div class="banner_slider slider_1">
                <div class="slider_active owl-carousel">
                    <?php
                        $banner = array(
                            array(
                                'link' => 'slide_1',
                                'title' => "Women's Fashion",
                                'parg' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'shop_now' => 'shop now'
                            ),
                            array(
                                'link' => 'slider_2',
                                'title' => "New Collection",
                                'parg' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'shop_now' => 'shop now'
                            ),
                            array(
                                'link' => 'slider_3',
                                'title' => "Best Collection",
                                'parg' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'shop_now' => 'shop now'
                            ),
                        )
                    ?>
                    <?php foreach($banner as $ban):?>
                        <div class="single_slider" style="background-image: url(assets/img/slider/<?php echo $ban['link']?>.png)">
                        <div class="slider_content">
                            <div class="slider_content_inner">
                                <h1><?php echo $ban['title']?></h1>
                                <p><?php echo $ban['parg']?> </p>
                                <a href="#"><?php echo $ban['shop_now']?></a>
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
                        <?php 
                            $product_active = array(
                                array(
                                    'link_product' => 'product1',
                                    'link_span' => 'span-new',
                                    'price' => '$50.00',
                                    'title' => 'Curabitur sodales'

                                ),
                                array(
                                    'link_product' => 'product2',
                                    'link_span' => 'span-hot',
                                    'price' => '$40.00',
                                    'title' => 'Quisque ornare dui'

                                ),
                                array(
                                    'link_product' => 'product3',
                                    'link_span' => 'span-new',
                                    'price' => '$60.00',
                                    'title' => 'Sed non turpiss'

                                ),
                                array(
                                    'link_product' => 'product4',
                                    'link_span' => 'span-hot',
                                    'price' => '$65.00',
                                    'title' => 'Duis convallis'

                                ),
                                array(
                                    'link_product' => 'product6',
                                    'link_span' => 'span-new',
                                    'price' => '$50.00',
                                    'title' => 'Curabitur sodales'
                                )
                                
                            )
                        ?>
                        <?php foreach($product_active as $pda): ?>
                            <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
<<<<<<< HEAD
                                    <a href="<?php echo $level?>single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product1.jpg" alt=""></a>
=======
                                    <a href="single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\<?php echo $pda['link_product']?>.jpg" alt=""></a>
>>>>>>> 2e1584d30c4869452d7fb8a4656deacf3152611f
                                    <div class="img_icone">
                                        <img src="<?php echo $level?>assets\img\cart\<?php echo $pda['link_span']?>.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
<<<<<<< HEAD
                                    <span class="product_price">$50.00</span>
                                    <h3 class="product_title"><a href="<?php echo $level?>single-product.php">Curabitur sodales</a></h3>
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
                                    <a href="<?php echo $level?>single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product2.jpg" alt=""></a>
                                    <div class="hot_img">
                                       <img src="<?php echo $level?>assets\img\cart\span-hot.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$40.00</span>
                                    <h3 class="product_title"><a href="<?php echo $level?>single-product.php">Quisque ornare dui</a></h3>
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
                                    <a href="<?php echo $level?>single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product3.jpg" alt=""></a>
                                    <div class="img_icone">
                                       <img src="<?php echo $level?>assets\img\cart\span-new.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$60.00</span>
                                    <h3 class="product_title"><a href="<?php echo $level?>single-product.php">Sed non turpiss</a></h3>
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
                                    <a href="<?php echo $level?>single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product4.jpg" alt=""></a>
                                    <div class="hot_img">
                                       <img src="<?php echo $level?>assets\img\cart\span-hot.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$65.00</span>
                                    <h3 class="product_title"><a href="<?php echo $level?>single-product.php">Duis convallis</a></h3>
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
                                    <a href="<?php echo $level?>single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product6.jpg" alt=""></a>
                                    <div class="img_icone">
                                       <img src="<?php echo $level?>assets\img\cart\span-new.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$50.00</span>
                                    <h3 class="product_title"><a href="<?php echo $level?>single-product.php">Curabitur sodales</a></h3>
=======
                                    <span class="product_price"><?php echo $pda['price']?></span>
                                    <h3 class="product_title"><a href="single-product.php"><?php echo $pda['title']?></a></h3>
>>>>>>> 2e1584d30c4869452d7fb8a4656deacf3152611f
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
                        <?php $feature_product= array(
                                array(
                                    'link_product' => 'product7',
                                    'link_span' => 'span-new',
                                    'price' => '$60.00',
                                    'title' => 'Maecenas sit amet'

                                ),
                                array(
                                    'link_product' => 'product8',
                                    'link_span' => 'span-hot',
                                    'price' => '$50.00',
                                    'title' => 'Sed non turpis'

                                ),
                                array(
                                    'link_product' => 'product9',
                                    'link_span' => 'span-new',
                                    'price' => '$70.00',
                                    'title' => 'Donec ac congue'

                                ),
                                array(
                                    'link_product' => 'product3',
                                    'link_span' => 'span-hot',
                                    'price' => '$60.00',
                                    'title' => 'Curabitur sodales'

                                ),
                                array(
                                    'link_product' => 'product2',
                                    'link_span' => 'span-new',
                                    'price' => '$50.00',
                                    'title' => 'Phasellus a arcu'
                                )
                                
                            )
                        ?>
                        <?php foreach($product_active as $pda): ?>
                            <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
<<<<<<< HEAD
                                    <a href="<?php echo $level?>single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product7.jpg" alt=""></a>
                                    <div class="hot_img">
                                       <img src="<?php echo $level?>assets\img\cart\span-hot.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$60.00</span>
                                    <h3 class="product_title"><a href="<?php echo $level?>single-product.php">Maecenas sit amet</a></h3>
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
                                    <a href="<?php echo $level?>single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product8.jpg" alt=""></a>
=======
                                    <a href="single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\<?php echo $pda['link_product']?>.jpg" alt=""></a>
>>>>>>> 2e1584d30c4869452d7fb8a4656deacf3152611f
                                    <div class="img_icone">
                                        <img src="<?php echo $level?>assets\img\cart\<?php echo $pda['link_span']?>.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
<<<<<<< HEAD
                                    <span class="product_price">$50.00</span>
                                    <h3 class="product_title"><a href="<?php echo $level?>single-product.php">Sed non turpis</a></h3>
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
                                    <a href="<?php echo $level?>single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product9.jpg" alt=""></a>
                                    <div class="img_icone">
                                       <img src="<?php echo $level?>assets\img\cart\span-new.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$70.00</span>
                                    <h3 class="product_title"><a href="<?php echo $level?>single-product.php">Donec ac congue</a></h3>
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
                                    <a href="<?php echo $level?>single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product3.jpg" alt=""></a>
                                    <div class="hot_img">
                                       <img src="<?php echo $level?>assets\img\cart\span-hot.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$60.00</span>
                                    <h3 class="product_title"><a href="<?php echo $level?>single-product.php">Curabitur sodales</a></h3>
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
                                    <a href="<?php echo $level?>single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product2.jpg" alt=""></a>
                                    <div class="img_icone">
                                       <img src="<?php echo $level?>assets\img\cart\span-new.png" alt="">
                                    </div>
                                    <div class="product_action">
                                        <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content">
                                    <span class="product_price">$50.00</span>
                                    <h3 class="product_title"><a href="<?php echo $level?>single-product.php">Phasellus a arcu</a></h3>
=======
                                    <span class="product_price"><?php echo $pda['price']?></span>
                                    <h3 class="product_title"><a href="single-product.php"><?php echo $pda['title']?></a></h3>
>>>>>>> 2e1584d30c4869452d7fb8a4656deacf3152611f
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
                    <?php
                    $banner_area = array(
                        array(
                            'link' => 'banner7',
                            'title' => 'sale off',
                            'sale_ps' => '40%'
                        ),
                        array(
                            'link' => 'banner8',
                            'title' => 'sale off',
                            'sale_ps' => '30%'
                        )                    
                    )
                    ?>
                    <?php foreach($banner_area as $bna):?>
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
                            $brand_link = array('brand1','brand2','brand3','brand4','brand5','brand6');
                            foreach($brand_link as $brl):
                        ?>
                         <div class="col-lg-2">
                            <div class="single_brand">
                                <a href="#"><img src="<?php echo $level?>assets\img\brand\<?php echo $brl?>.jpg" alt=""></a>
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