﻿<?php $level='../' ?> <!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Coron-my account</title>
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
                                                <li><a href="contact.html" title="Contact">Contact</a></li>
                                                <li><a href="wishlist.html" title="wishlist">My wishlist</a></li>
                                                <li><a href="my-account.html" title="My account">My account</a></li>
                                                <li><a href="cart.html" title="My cart">My cart</a></li>
                                                <li><a href="login.html" title="Login">Login</a></li>
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
                                            <a href="index.html"><img src="<?php echo $level?>assets\img\logo\logo.jpg.png" alt=""></a>
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
                                                        <a href="checkout.html"> Check out</a>
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
                                                            <li class="active"><a href="index.html">Home</a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li><a href="index.html">Home 1</a></li>
                                                                            <li><a href="index-2.html">Home 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                            </li>
                                                            <li><a href="shop.html">shop</a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li><a href="shop-list.html">shop list</a></li>
                                                                            <li><a href="shop-fullwidth.html">shop Full Width Grid</a></li>
                                                                            <li><a href="shop-fullwidth-list.html">shop Full Width list</a></li>
                                                                            <li><a href="shop-sidebar.html">shop Right Sidebar</a></li>
                                                                            <li><a href="shop-sidebar-list.html">shop list Right Sidebar</a></li>
                                                                            <li><a href="single-product.html">Product Details</a></li>
                                                                            <li><a href="single-product-sidebar.html">Product sidebar</a></li>
                                                                            <li><a href="single-product-video.html">Product Details video</a></li>
                                                                            <li><a href="single-product-gallery.html">Product Details Gallery</a></li>
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
                                                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                                                <li><a href="portfolio-details.html">single portfolio </a></li>
                                                                                <li><a href="about.html">About Us </a></li>
                                                                                <li><a href="about-2.html">About Us 2</a></li>
                                                                                <li><a href="services.html">Service </a></li>
                                                                                <li><a href="my-account.html">my account </a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Column2</a></h3>
                                                                            <ul>
                                                                                <li><a href="blog.html">Blog </a></li>
                                                                                <li><a href="blog-details.html">Blog  Details </a></li>
                                                                                <li><a href="blog-fullwidth.html">Blog FullWidth</a></li>
                                                                                <li><a href="blog-sidebar.html">Blog  Sidebar</a></li>
                                                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                                                <li><a href="404.html">404</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="mega_items">
                                                                            <h3><a href="#">Column3</a></h3>
                                                                            <ul>
                                                                                <li><a href="contact.html">Contact</a></li>
                                                                                <li><a href="cart.html">cart</a></li>
                                                                                <li><a href="checkout.html">Checkout  </a></li>
                                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                                <li><a href="login.html">Login</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            
                                                             <li><a href="blog.html">blog</a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li><a href="blog-details.html">blog details</a></li>
                                                                            <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                                            <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </li>
                                                            <li><a href="contact.html">contact us</a></li>

                                                        </ul>
                                                </nav>
                                            </div>
<div class="mobile-menu d-lg-none">
                                                    <nav>
                                                        <ul>
                                                            <li><a href="index.html">Home</a>
                                                                <div>
                                                                    <div>
                                                                        <ul>
                                                                            <li><a href="index.html">Home 1</a></li>
                                                                            <li><a href="index-2.html">Home 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div> 
                                                            </li>
                                                            <li><a href="shop.html">shop</a>
                                                                <div>
                                                                    <div>
                                                                        <ul>
                                                                            <li><a href="shop-list.html">shop list</a></li>
                                                                            <li><a href="shop-fullwidth.html">shop Full Width Grid</a></li>
                                                                            <li><a href="shop-fullwidth-list.html">shop Full Width list</a></li>
                                                                            <li><a href="shop-sidebar.html">shop Right Sidebar</a></li>
                                                                            <li><a href="shop-sidebar-list.html">shop list Right Sidebar</a></li>
                                                                            <li><a href="single-product.html">Product Details</a></li>
                                                                            <li><a href="single-product-sidebar.html">Product sidebar</a></li>
                                                                            <li><a href="single-product-video.html">Product Details video</a></li>
                                                                            <li><a href="single-product-gallery.html">Product Details Gallery</a></li>
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
                                                                                <li><a href="portfolio.html">Portfolio</a></li>
                                                                                <li><a href="portfolio-details.html">single portfolio </a></li>
                                                                                <li><a href="about.html">About Us </a></li>
                                                                                <li><a href="about-2.html">About Us 2</a></li>
                                                                                <li><a href="services.html">Service </a></li>
                                                                                <li><a href="my-account.html">my account </a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <h3><a href="#">Column2</a></h3>
                                                                            <ul>
                                                                                <li><a href="blog.html">Blog </a></li>
                                                                                <li><a href="blog-details.html">Blog  Details </a></li>
                                                                                <li><a href="blog-fullwidth.html">Blog FullWidth</a></li>
                                                                                <li><a href="blog-sidebar.html">Blog  Sidebar</a></li>
                                                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                                                <li><a href="404.html">404</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div>
                                                                            <h3><a href="#">Column3</a></h3>
                                                                            <ul>
                                                                                <li><a href="contact.html">Contact</a></li>
                                                                                <li><a href="cart.html">cart</a></li>
                                                                                <li><a href="checkout.html">Checkout  </a></li>
                                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                                <li><a href="login.html">Login</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            
                                                            <li><a href="blog.html">blog</a>
                                                                <div>
                                                                    <div>
                                                                        <ul>
                                                                            <li><a href="blog-details.html">blog details</a></li>
                                                                            <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                                            <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </li>
                                                            <li><a href="contact.html">contact us</a></li>

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
                                            <li><a href="index.html">home</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>my account</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->

                        <!-- Start Maincontent  -->
                        <section class="main_content_area">
                                <div class="account_dashboard">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-3 col-lg-3">
                                            <!-- Nav tabs -->
                                            <div class="dashboard_tab_button">
                                                <ul role="tablist" class="nav flex-column dashboard-list">
                                                    <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Dashboard</a></li>
                                                    <li> <a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
                                                    <li><a href="#downloads" data-toggle="tab" class="nav-link">Downloads</a></li>
                                                    <li><a href="#address" data-toggle="tab" class="nav-link">Addresses</a></li>
                                                    <li><a href="#account-details" data-toggle="tab" class="nav-link">Account details</a></li>
                                                    <li><a href="login.html" class="nav-link">logout</a></li>
                                                </ul>
                                            </div>    
                                        </div>
                                        <div class="col-sm-12 col-md-9 col-lg-9">
                                            <!-- Tab panes -->
                                            <div class="tab-content dashboard_content">
                                                <div class="tab-pane fade show active" id="dashboard">
                                                    <h3>Dashboard </h3>
                                                    <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
                                                </div>
                                                <div class="tab-pane fade" id="orders">
                                                    <h3>Orders</h3>
                                                    <div class="coron_table table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Order</th>
                                                                    <th>Date</th>
                                                                    <th>Status</th>
                                                                    <th>Total</th>
                                                                    <th>Actions</th>	 	 	 	
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>May 10, 2018</td>
                                                                    <td><span class="success">Completed</span></td>
                                                                    <td>$25.00 for 1 item </td>
                                                                    <td><a href="cart.html" class="view">view</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>May 10, 2018</td>
                                                                    <td>Processing</td>
                                                                    <td>$17.00 for 1 item </td>
                                                                    <td><a href="cart.html" class="view">view</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="downloads">
                                                    <h3>Downloads</h3>
                                                    <div class="coron_table table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Product</th>
                                                                    <th>Downloads</th>
                                                                    <th>Expires</th>
                                                                    <th>Download</th>	 	 	 	
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Shopnovilla - Free Real Estate PSD Template</td>
                                                                    <td>May 10, 2018</td>
                                                                    <td><span class="danger">Expired</span></td>
                                                                    <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Organic - ecommerce html template</td>
                                                                    <td>Sep 11, 2018</td>
                                                                    <td>Never</td>
                                                                    <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="address">
                                                   <p>The following addresses will be used on the checkout page by default.</p>
                                                    <h4 class="billing-address">Billing address</h4>
                                                    <a href="#" class="view">Edit</a>
                                                    <p><strong>Bobby Jackson</strong></p>
                                                    <address>
                                                        House #15<br>
                                                        Road #1<br>
                                                        Block #C <br>
                                                        Banasree <br>
                                                        Dhaka <br>
                                                        1212
                                                    </address>
                                                    <p>Bangladesh</p>   
                                                </div>
                                                <div class="tab-pane fade" id="account-details">
                                                    <h3>Account details </h3>
                                                    <div class="login">
                                                        <div class="login_form_container">
                                                            <div class="account_login_form">
                                                                <form action="#">
                                                                    <p>Already have an account? <a href="#">Log in instead!</a></p>
                                                                    <div class="input-radio">
                                                                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                                                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                                                    </div> <br>
                                                                    <label>First Name</label>
                                                                    <input type="text" name="first-name">
                                                                    <label>Last Name</label>
                                                                    <input type="text" name="last-name">
                                                                    <label>Email</label>
                                                                    <input type="text" name="email-name">
                                                                    <label>Password</label>
                                                                    <input type="password" name="user-password">
                                                                    <label>Birthdate</label>
                                                                    <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                                                                    <span class="example">
                                                                      (E.g.: 05/31/1970)
                                                                    </span>
                                                                    <br>
                                                                    <span class="custom_checkbox">
                                                                        <input type="checkbox" value="1" name="optin">
                                                                        <label>Receive offers from our partners</label>
                                                                    </span>
                                                                    <br>
                                                                    <span class="custom_checkbox">
                                                                        <input type="checkbox" value="1" name="newsletter">
                                                                        <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                                    </span>
                                                                    <div class="save_button primary_btn default_button">
                                                                        <a href="#">Save</a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>      	
                        </section>			
                        <!-- End Maincontent  --> 
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
