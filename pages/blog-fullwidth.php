﻿<?php $level='../' ?> <!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Coron-blog fullwidth</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">
		
		<!-- all css here -->
       <link rel="stylesheet" href="assets\css\bootstrap.min.css">
        <link rel="stylesheet" href="assets\css\plugin.css">
        <link rel="stylesheet" href="assets\css\bundle.css">
        <link rel="stylesheet" href="assets\css\style.css">
        <link rel="stylesheet" href="assets\css\responsive.css">
        <script src="assets\js\vendor\modernizr-2.8.3.min.js"></script>
    </head>
    <body>
            <!-- Add your site or application content here -->
            
            <!--pos page start-->
            <div class="pos_page">
                <div class="container">
                    <!--pos page inner-->
                    <div class="pos_page_inner">  
                       <!--header area -->
                        <div class="header_area">
                           <!--header top--> 
                            <div class="header_top">
                               <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="switcher">
                                            <ul>
                                                <li class="languages"><a href="#"><img src="<?php echo $level?>assets\img\logo\fontlogo.jpg" alt=""> English <i class="fa fa-angle-down"></i></a>
                                                    <ul class="dropdown_languages">
                                                        <li><a href="#"><img src="<?php echo $level?>assets\img\logo\fontlogo.jpg" alt=""> English</a></li>
                                                        <li><a href="#"><img src="<?php echo $level?>assets\img\logo\fontlogo2.jpg" alt=""> French </a></li>
                                                    </ul>   
                                                </li> 

                                                <li class="currency"><a href="#"> Currency : $ <i class="fa fa-angle-down"></i></a>
                                                    <ul class="dropdown_currency">
                                                        <li><a href="#"> Dollar (USD)</a></li>
                                                        <li><a href="#"> Euro (EUR)  </a></li>
                                                    </ul>  
                                                </li> 
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="header_links">
                                            <ul>
                                                <li><a href="contact.php" title="Contact">Contact</a></li>
                                                <li><a href="wishlist.php" title="wishlist">My wishlist</a></li>
                                                <li><a href="my-account.php" title="My account">My account</a></li>
                                                <li><a href="cart.php" title="My cart">My cart</a></li>
                                                <li><a href="login.php" title="Login">Login</a></li>
                                            </ul>
                                        </div>   
                                    </div>
                               </div> 
                            </div> 
                            <!--header top end-->

                            <!--header middel--> 
                            <div class="header_middel">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-md-3">
                                        <div class="logo">
                                            <a href="index.php"><img src="<?php echo $level?>assets\img\logo\logo.jpg.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9">
                                        <div class="header_right_info">
                                            <div class="search_bar">
                                                <form action="#">
                                                    <input placeholder="Search..." type="text">
                                                    <button type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                            <div class="shopping_cart">
                                                <a href="#"><i class="fa fa-shopping-cart"></i> 2Items - $209.44 <i class="fa fa-angle-down"></i></a>

                                                <!--mini cart-->
                                                <div class="mini_cart">
                                                    <div class="cart_item">
                                                       <div class="cart_img">
                                                           <a href="#"><img src="<?php echo $level?>assets\img\cart\cart.jpg" alt=""></a>
                                                       </div>
                                                        <div class="cart_info">
                                                            <a href="#">lorem ipsum dolor</a>
                                                            <span class="cart_price">$115.00</span>
                                                            <span class="quantity">Qty: 1</span>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="cart_item">
                                                       <div class="cart_img">
                                                           <a href="#"><img src="<?php echo $level?>assets\img\cart\cart2.jpg" alt=""></a>
                                                       </div>
                                                        <div class="cart_info">
                                                            <a href="#">Quisque ornare dui</a>
                                                            <span class="cart_price">$105.00</span>
                                                            <span class="quantity">Qty: 1</span>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="shipping_price">
                                                        <span> Shipping </span>
                                                        <span>  $7.00  </span>
                                                    </div>
                                                    <div class="total_price">
                                                        <span> total </span>
                                                        <span class="prices">  $227.00  </span>
                                                    </div>
                                                    <div class="cart_button">
                                                        <a href="checkout.php"> Check out</a>
                                                    </div>
                                                </div>
                                                <!--mini cart end-->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>     
                            <!--header middel end-->      
                            <div class="header_bottom">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="main_menu_inner">
                                            <div class="main_menu d-none d-lg-block">
                                                <nav>
                                                    <ul>
                                                            <li class="active"><a href="index.php">Home</a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li><a href="index.php">Home 1</a></li>
                                                                            <li><a href="index-2.php">Home 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                            </li>
                                                            <li><a href="shop.php">shop</a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li><a href="shop-list.php">shop list</a></li>
                                                                            <li><a href="shop-fullwidth.php">shop Full Width Grid</a></li>
                                                                            <li><a href="shop-fullwidth-list.php">shop Full Width list</a></li>
                                                                            <li><a href="shop-sidebar.php">shop Right Sidebar</a></li>
                                                                            <li><a href="shop-sidebar-list.php">shop list Right Sidebar</a></li>
                                                                            <li><a href="single-product.php">Product Details</a></li>
                                                                            <li><a href="single-product-sidebar.php">Product sidebar</a></li>
                                                                            <li><a href="single-product-video.php">Product Details video</a></li>
                                                                            <li><a href="single-product-gallery.php">Product Details Gallery</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </li>
                                                            <li><a href="#">women</a>
                                                                <div class="mega_menu">
                                                                    <div class="mega_top fix">
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Accessories</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Cocktai</a></li>
                                                                                <li><a href="#">day</a></li>
                                                                                <li><a href="#">Evening</a></li>
                                                                                <li><a href="#">Sundresses</a></li>
                                                                                <li><a href="#">Belts</a></li>
                                                                                <li><a href="#">Sweets</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">HandBags</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Accessories</a></li>
                                                                                <li><a href="#">Hats and Gloves</a></li>
                                                                                <li><a href="#">Lifestyle</a></li>
                                                                                <li><a href="#">Bras</a></li>
                                                                                <li><a href="#">Scarves</a></li>
                                                                                <li><a href="#">Small Leathers</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Tops</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Evening</a></li>
                                                                                <li><a href="#">Long Sleeved</a></li>
                                                                                <li><a href="#">Shrot Sleeved</a></li>
                                                                                <li><a href="#">Tanks and Camis</a></li>
                                                                                <li><a href="#">Sleeveless</a></li>
                                                                                <li><a href="#">Sleeveless</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mega_bottom fix">
                                                                        <div class="mega_thumb">
                                                                            <a href="#"><img src="<?php echo $level?>assets\img\banner\banner1.jpg" alt=""></a>
                                                                        </div>
                                                                        <div class="mega_thumb">
                                                                            <a href="#"><img src="<?php echo $level?>assets\img\banner\banner2.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li><a href="#">men</a>
                                                                <div class="mega_menu">
                                                                    <div class="mega_top fix">
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Rings</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Platinum Rings</a></li>
                                                                                <li><a href="#">Gold Ring</a></li>
                                                                                <li><a href="#">Silver Ring</a></li>
                                                                                <li><a href="#">Tungsten Ring</a></li>
                                                                                <li><a href="#">Sweets</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Bands</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Platinum Bands</a></li>
                                                                                <li><a href="#">Gold Bands</a></li>
                                                                                <li><a href="#">Silver Bands</a></li>
                                                                                <li><a href="#">Silver Bands</a></li>
                                                                                <li><a href="#">Sweets</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <a href="#"><img src="<?php echo $level?>assets\img\banner\banner3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li><a href="#">pages</a>
                                                                <div class="mega_menu">
                                                                    <div class="mega_top fix">
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Column1</a></h3>
                                                                            <ul>
                                                                                <li><a href="portfolio.php">Portfolio</a></li>
                                                                                <li><a href="portfolio-details.php">single portfolio </a></li>
                                                                                <li><a href="about.php">About Us </a></li>
                                                                                <li><a href="about-2.php">About Us 2</a></li>
                                                                                <li><a href="services.php">Service </a></li>
                                                                                <li><a href="my-account.php">my account </a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Column2</a></h3>
                                                                            <ul>
                                                                                <li><a href="blog.php">Blog </a></li>
                                                                                <li><a href="blog-details.php">Blog  Details </a></li>
                                                                                <li><a href="blog-fullwidth.php">Blog FullWidth</a></li>
                                                                                <li><a href="blog-sidebar.php">Blog  Sidebar</a></li>
                                                                                <li><a href="faq.php">Frequently Questions</a></li>
                                                                                <li><a href="404.php">404</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Column3</a></h3>
                                                                            <ul>
                                                                                <li><a href="contact.php">Contact</a></li>
                                                                                <li><a href="cart.php">cart</a></li>
                                                                                <li><a href="checkout.php">Checkout  </a></li>
                                                                                <li><a href="wishlist.php">Wishlist</a></li>
                                                                                <li><a href="login.php">Login</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            
                                                             <li><a href="blog.php">blog</a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li><a href="blog-details.php">blog details</a></li>
                                                                            <li><a href="blog-fullwidth.php">blog fullwidth</a></li>
                                                                            <li><a href="blog-sidebar.php">blog sidebar</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </li>
                                                            <li><a href="contact.php">contact us</a></li>

                                                        </ul>
                                                </nav>
                                            </div>
                                            <div class="mobile-menu d-lg-none">
                                                    <nav>
                                                        <ul>
                                                            <li><a href="index.php">Home</a>
                                                                <div>
                                                                    <div>
                                                                        <ul>
                                                                            <li><a href="index.php">Home 1</a></li>
                                                                            <li><a href="index-2.php">Home 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                            </li>
                                                            <li><a href="shop.php">shop</a>
                                                                <div>
                                                                    <div>
                                                                        <ul>
                                                                            <li><a href="shop-list.php">shop list</a></li>
                                                                            <li><a href="shop-fullwidth.php">shop Full Width Grid</a></li>
                                                                            <li><a href="shop-fullwidth-list.php">shop Full Width list</a></li>
                                                                            <li><a href="shop-sidebar.php">shop Right Sidebar</a></li>
                                                                            <li><a href="shop-sidebar-list.php">shop list Right Sidebar</a></li>
                                                                            <li><a href="single-product.php">Product Details</a></li>
                                                                            <li><a href="single-product-sidebar.php">Product sidebar</a></li>
                                                                            <li><a href="single-product-video.php">Product Details video</a></li>
                                                                            <li><a href="single-product-gallery.php">Product Details Gallery</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </li>
                                                            <li><a href="#">women</a>
                                                                <div>
                                                                    <div>
                                                                        <div>
                                                                            <h3><a href="#">Accessories</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Cocktai</a></li>
                                                                                <li><a href="#">day</a></li>
                                                                                <li><a href="#">Evening</a></li>
                                                                                <li><a href="#">Sundresses</a></li>
                                                                                <li><a href="#">Belts</a></li>
                                                                                <li><a href="#">Sweets</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <h3><a href="#">HandBags</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Accessories</a></li>
                                                                                <li><a href="#">Hats and Gloves</a></li>
                                                                                <li><a href="#">Lifestyle</a></li>
                                                                                <li><a href="#">Bras</a></li>
                                                                                <li><a href="#">Scarves</a></li>
                                                                                <li><a href="#">Small Leathers</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <h3><a href="#">Tops</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Evening</a></li>
                                                                                <li><a href="#">Long Sleeved</a></li>
                                                                                <li><a href="#">Shrot Sleeved</a></li>
                                                                                <li><a href="#">Tanks and Camis</a></li>
                                                                                <li><a href="#">Sleeveless</a></li>
                                                                                <li><a href="#">Sleeveless</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div>
                                                                            <a href="#"><img src="<?php echo $level?>assets\img\banner\banner1.jpg" alt=""></a>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#"><img src="<?php echo $level?>assets\img\banner\banner2.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li><a href="#">men</a>
                                                                <div>
                                                                    <div>
                                                                        <div>
                                                                            <h3><a href="#">Rings</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Platinum Rings</a></li>
                                                                                <li><a href="#">Gold Ring</a></li>
                                                                                <li><a href="#">Silver Ring</a></li>
                                                                                <li><a href="#">Tungsten Ring</a></li>
                                                                                <li><a href="#">Sweets</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <h3><a href="#">Bands</a></h3>
                                                                            <ul>
                                                                                <li><a href="#">Platinum Bands</a></li>
                                                                                <li><a href="#">Gold Bands</a></li>
                                                                                <li><a href="#">Silver Bands</a></li>
                                                                                <li><a href="#">Silver Bands</a></li>
                                                                                <li><a href="#">Sweets</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#"><img src="<?php echo $level?>assets\img\banner\banner3.jpg" alt=""></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li><a href="#">pages</a>
                                                                <div>
                                                                    <div>
                                                                        <div>
                                                                            <h3><a href="#">Column1</a></h3>
                                                                            <ul>
                                                                                <li><a href="portfolio.php">Portfolio</a></li>
                                                                                <li><a href="portfolio-details.php">single portfolio </a></li>
                                                                                <li><a href="about.php">About Us </a></li>
                                                                                <li><a href="about-2.php">About Us 2</a></li>
                                                                                <li><a href="services.php">Service </a></li>
                                                                                <li><a href="my-account.php">my account </a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <h3><a href="#">Column2</a></h3>
                                                                            <ul>
                                                                                <li><a href="blog.php">Blog </a></li>
                                                                                <li><a href="blog-details.php">Blog  Details </a></li>
                                                                                <li><a href="blog-fullwidth.php">Blog FullWidth</a></li>
                                                                                <li><a href="blog-sidebar.php">Blog  Sidebar</a></li>
                                                                                <li><a href="faq.php">Frequently Questions</a></li>
                                                                                <li><a href="404.php">404</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <h3><a href="#">Column3</a></h3>
                                                                            <ul>
                                                                                <li><a href="contact.php">Contact</a></li>
                                                                                <li><a href="cart.php">cart</a></li>
                                                                                <li><a href="checkout.php">Checkout  </a></li>
                                                                                <li><a href="wishlist.php">Wishlist</a></li>
                                                                                <li><a href="login.php">Login</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            
                                                            <li><a href="blog.php">blog</a>
                                                                <div>
                                                                    <div>
                                                                        <ul>
                                                                            <li><a href="blog-details.php">blog details</a></li>
                                                                            <li><a href="blog-fullwidth.php">blog fullwidth</a></li>
                                                                            <li><a href="blog-sidebar.php">blog sidebar</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </li>
                                                            <li><a href="contact.php">contact us</a></li>

                                                        </ul>
                                                    </nav>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--header end -->
                         <!--breadcrumbs area start-->
                        <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.php">home</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>blog fullwidth</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->
                        
                       <!--blog area start-->
                        <div class="main_blog_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="blog_details_left">

                                        <div class="blog_gallery">   
                                            <div class="blog_header">
                                                <span>
                                                    <a href="#">WordPress</a>
                                                </span>
                                                <h2><a href="#">Blog image post</a></h2>
                                                <div class="blog__post">
                                                    <ul>
                                                        <li class="post_author">Posts by : admin</li>
                                                        <li class="post_date"> Mar102015	</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="blog_thumb blog__hover">
                                                <a href="blog-details.php"><img src="<?php echo $level?>assets\img\blog\blog7.jpg" alt=""></a>
                                            </div>
                                            <div class="blog_fullwidth_desc">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                                <a href="#">read more</a>
                                            </div>  
                                            <div class="wishlist-share">
                                                <h4>Share on:</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                                </ul>      
                                            </div>
                                        </div> 
                                       
                                        <div class="blog_gallery">
                                            <div class="blog_header">
                                                <span>
                                                    <a href="#">WordPress</a>
                                                </span>
                                                <h2><a href="#">Post with Gallery </a></h2>
                                                <div class="blog__post">
                                                    <ul>
                                                        <li class="post_author">Posts by : admin</li>
                                                        <li class="post_date"> Mar102015	</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="blog_active owl-carousel">
                                               <div class="blog_thumb blog__hover">
                                                    <a href="blog-details.php"><img src="<?php echo $level?>assets\img\blog\blog9.jpg" alt=""></a>
                                                </div>
                                                <div class="blog_thumb">
                                                    <a href="blog-details.php"><img src="<?php echo $level?>assets\img\blog\blog7.jpg" alt=""></a>
                                                </div>
                                                <div class="blog_thumb">
                                                    <a href="blog-details.php"><img src="<?php echo $level?>assets\img\blog\blog8.jpg" alt=""></a>
                                                </div>
                                                <div class="blog_thumb">
                                                    <a href="blog-details.php"><img src="<?php echo $level?>assets\img\blog\blog7.jpg" alt=""></a>
                                                </div>
                                            </div> 
                                            <div class="blog_fullwidth_desc">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                                <a href="#">read more</a>
                                            </div>  
                                            <div class="wishlist-share">
                                                <h4>Share on:</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                                </ul>      
                                            </div>
                                        </div>
                                         <div class="blog_gallery">
                                            <div class="blog_header">
                                                <span>
                                                    <a href="#">WordPress</a>
                                                </span>
                                                <h2><a href="#">Post with Audio</a></h2>
                                                <div class="blog__post">
                                                    <ul>
                                                        <li class="post_author">Posts by : admin</li>
                                                        <li class="post_date"> Mar102015	</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="blog_thumb">
                                                <a href="blog-details.php"><img src="<?php echo $level?>assets\img\blog\blog8.jpg" alt=""></a>
                                            </div>
                                            <div class="blog_aduio_icone">
                                                <audio controls="">
                                                  <source src="http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3?1" type="audio/mp3">
                                                </audio>
                                            </div>
                                            <div class="blog_fullwidth_desc">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                                <a href="#">read more</a>
                                            </div>  
                                            <div class="wishlist-share">
                                                <h4>Share on:</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                                </ul>      
                                            </div>
                                        </div>
                                        <div class="blog_gallery">
                                            <div class="blog_header">
                                                <span>
                                                    <a href="#">WordPress</a>
                                                </span>
                                                <h2><a href="#">Post with Video</a></h2>
                                                <div class="blog__post">
                                                    <ul>
                                                        <li class="post_author">Posts by : admin</li>
                                                        <li class="post_date"> Mar102015	</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="blog_thumb embed-responsive embed-responsive-16by9">
                                                <iframe width="870" height="700" src="https://www.youtube.com/embed/DR2c266yWEA" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                                            </div>
                                            <div class="blog_fullwidth_desc">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                                <a href="#">read more</a>
                                            </div>  
                                            <div class="wishlist-share">
                                                <h4>Share on:</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                                </ul>      
                                            </div>
                                        </div>
                                        <div class="blog_gallery">   
                                            <div class="blog_header">
                                                <span>
                                                    <a href="#">WordPress</a>
                                                </span>
                                                <h2><a href="#">Maecenas ultricies</a></h2>
                                                <div class="blog__post">
                                                    <ul>
                                                        <li class="post_author">Posts by : admin</li>
                                                        <li class="post_date"> Mar102015	</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="blog_thumb blog__hover">
                                                <a href="blog-details.php"><img src="<?php echo $level?>assets\img\blog\blog6.jpg" alt=""></a>
                                            </div>
                                            <div class="blog_fullwidth_desc">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                                                <a href="#">read more</a>
                                            </div>  
                                            <div class="wishlist-share">
                                                <h4>Share on:</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>           
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>        
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
                                                </ul>      
                                            </div>
                                        </div> 
                                       
                                    </div>
                                    <!--pagination style start--> 
                                    <div class="blog_pagination fullwidth">
                                        <div class="page_number">
                                            <span>Pages: </span>
                                            <ul>
                                                <li>«</li>
                                                <li class="current_number">1</li>
                                                <li><a href="#">2</a></li>
                                                <li>»</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--pagination style end--> 
                                </div>
                                
                            </div>
                        </div>
                        <!--blog area end-->
 
                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->
            
            <!--footer area start-->
            <div class="footer_area">
                <div class="footer_top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer_widget">
                                    <h3>About us</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="footer_widget_contect">
                                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>  19 Interpro Road Madison, AL 35758, USA</p>

                                        <p><i class="fa fa-mobile" aria-hidden="true"></i> (012) 234 432 3568</p>
                                        <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact@plazathemes.com </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer_widget">
                                    <h3>My Account</h3>
                                    <ul>
                                        <li><a href="#">Your Account</a></li>
                                        <li><a href="#">My orders</a></li>
                                        <li><a href="#">My credit slips</a></li>
                                        <li><a href="#">My addresses</a></li>
                                        <li><a href="#">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer_widget">
                                    <h3>Informations</h3>
                                    <ul>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">Our store(s)!</a></li>
                                        <li><a href="#">My credit slips</a></li>
                                        <li><a href="#">Terms and conditions</a></li>
                                        <li><a href="#">About us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer_widget">
                                    <h3>extras</h3>
                                    <ul>
                                        <li><a href="#"> Brands</a></li>
                                        <li><a href="#"> Gift Vouchers </a></li>
                                        <li><a href="#"> Affiliates </a></li>
                                        <li><a href="#"> Specials </a></li>
                                        <li><a href="#"> Privacy policy </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="copyright_area">
                                    <ul>
                                        <li><a href="#"> about us </a></li>
                                        <li><a href="#">  Customer Service  </a></li>
                                        <li><a href="#">  Privacy Policy  </a></li>
                                    </ul>
                                    <p>Copyright &copy; 2018 <a href="#">Pos Coron</a>. All rights reserved. </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="footer_social text-right">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                        
                                        <li><a href="#"><i class="fa fa-wifi" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer area end-->
            
            
            
            
      
		
		<!-- all js here -->
        <script src="assets\js\vendor\jquery-1.12.0.min.js"></script>
        <script src="assets\js\popper.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\js\ajax-mail.js"></script>
        <script src="assets\js\plugins.js"></script>
        <script src="assets\js\main.js"></script>
    </body>
</html>
