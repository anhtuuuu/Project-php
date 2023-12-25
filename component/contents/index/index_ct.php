  <?php     
    include_once "{$level}Database/tables/list_data_product.php";
    include_once "{$level}Database/tables/list_data_order_details.php";

  $sql = "select product_id,thumbnail,title,product.price,sum(num) as 'total' from product inner join order_details on product.id = order_details.product_id where deleted = '1' group by product_id,thumbnail,title,product.price ";
  $data = $conn->query($sql);
  $product_order = $data->fetchAll(PDO::FETCH_ASSOC);
//   print_r($product_order);
  ?>
  <!--pos home section-->
  <div class="pos_home_section">
                            <div class="row">
                               <!--banner slider start-->
                                <div class="col-12">
                                    <div class="banner_slider slider_two">
                                        <div class="slider_active owl-carousel">
                                            <div class="single_slider" style="background-image: url(assets/img/slider/slider_2.png)">
                                                <div class="slider_content">
                                                    <div class="slider_content_inner">  
                                                        <h1>fashion for you</h1>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Cumque eligendi quia, ratione porro, nemo non.</p>
                                                        <a href="#">shop now</a>
                                                    </div>     
                                                </div>
                                            </div>
                                            <div class="single_slider" style="background-image: url(assets/img/slider/slide_4.png)">
                                                 <div class="slider_content">
                                                    <div class="slider_content_inner">  
                                                        <h1>fashion for you</h1>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Cumque eligendi quia, ratione porro, nemo non.</p>
                                                        <a href="#">shop now</a>
                                                    </div>     
                                                </div> 
                                            </div>
                                            <div class="single_slider" style="background-image: url(assets/img/slider/slider_3.png)">
                                                 <div class="slider_content">
                                                    <div class="slider_content_inner">  
                                                        <h1>fashion for you</h1>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Cumque eligendi quia, ratione porro, nemo non.</p>
                                                        <a href="#">shop now</a>
                                                    </div>     
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <!--banner slider start-->
                                </div>    
                            </div>  
                            <!-- all product -->
                            <div class="new_product_area product_two">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="block_title">
                                        <h3> Products</h3>
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
                                                    <span class="product_price">$<?php echo $pd['price'] ?></span>
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
                            <!-- end all product -->
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
                                                    <span class="product_price">$<?php echo $pd['price'] ?></span>
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
                                   
                            <!--banner area start-->
                            <div class="banner_area banner_two">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_banner">
                                            <a href="#"><img src="<?php echo $level?>assets\img\banner\banner7.jpg" alt=""></a>
                                            <div class="banner_title">
                                                <p>Up to <span> 40%</span> off</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_banner">
                                            <a href="#"><img src="<?php echo $level?>assets\img\banner\banner8.jpg" alt=""></a>
                                            <div class="banner_title title_2">
                                                <p>sale off <span> 30%</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_banner">
                                            <a href="#"><img src="<?php echo $level?>assets\img\banner\banner11.jpg" alt=""></a>
                                            <div class="banner_title title_3">
                                                <p>sale off <span> 30%</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                            <!--banner area end--> 
                                                          
                            <!--featured product area start-->
                            <div class="new_product_area product_two">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="block_title">
                                        <h3>Hot selling products</h3>
                                    </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="single_p_active owl-carousel">
                                        <?php
                                            foreach($product_order as $pd){ 
                                                if($pd['total'] >= 5){
                                        ?>
                                        <div class="col-lg-3">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                   <a href="<?php echo $level?>pages\single-product.php?id=<?php echo $pd['product_id'] ?>"><img src="<?php echo $level?>uploads/<?php echo $pd['thumbnail'] ?>" alt="" ></a> 
                                                   <div class="hot_img">
                                                      <img src="<?php echo $level?>assets\img\cart\span-hot.png" alt="">
                                                   </div>
                                                   <div class="product_action">
                                                      <a href="<?php echo $level?>pages\single-product.php?id=<?php echo $pd['product_id'] ?>"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                   </div>
                                                </div>
                                                <div class="product_content">
                                                    <span class="product_price">$<?php echo $pd['price'] ?></span>
                                                    <h3 class="product_title"><a href="<?php echo $level?>pages\single-product.php?id=<?php echo $pd['product_id'] ?>"><?php echo $pd['title'] ?></a></h3>
                                                </div>
                                                <div class="product_info">
                                                    <ul>
                                                        <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } } ?>                                        
                                    </div> 
                                </div>      
                            </div> 
                            <!--featured product area start-->   
                                   
                            <!--blog area start-->
                            <div class="blog_area blog_two">
                                <div class="row">   
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_blog">
                                            <div class="blog_thumb">
                                                <a href="<?php echo $level?>pages/blog-details.php"><img src="<?php echo $level?>assets\img\blog\blog3.jpg" alt=""></a>
                                            </div>
                                            <div class="blog_content">
                                                <div class="blog_post">
                                                    <ul>
                                                        <li>
                                                            <a href="#">Tech</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h3><a href="<?php echo $level?>pages/blog-details.php">When an unknown took a galley of type.</a></h3>
                                                <p>Distinctively simplify dynamic resources whereas prospective core competencies. Objectively pursue multidisciplinary human capital for interoperable.</p>
                                                <div class="post_footer">
                                                    <div class="post_meta">
                                                        <ul>
                                                            <li>Jun 20, 2018</li>
                                                            <li>3 Comments</li>
                                                        </ul>
                                                    </div>
                                                    <div class="Read_more">
                                                        <a href="<?php echo $level?>pages/blog-details.php">Read more  <i class="fa fa-angle-double-right"></i></a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_blog">
                                            <div class="blog_thumb">
                                                <a href="<?php echo $level?>pages/blog-details.php"><img src="<?php echo $level?>assets\img\blog\blog4.jpg" alt=""></a>
                                            </div>
                                            <div class="blog_content">
                                                <div class="blog_post">
                                                    <ul>
                                                        <li>
                                                            <a href="#">Men</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h3><a href="<?php echo $level?>pages/blog-details.php">When an unknown took a galley of type.</a></h3>
                                                <p>Distinctively simplify dynamic resources whereas prospective core competencies. Objectively pursue multidisciplinary human capital for interoperable.</p>
                                                <div class="post_footer">
                                                    <div class="post_meta">
                                                        <ul>
                                                            <li>Jun 20, 2018</li>
                                                            <li>3 Comments</li>
                                                        </ul>
                                                    </div>
                                                    <div class="Read_more">
                                                        <a href="<?php echo $level?>pages/blog-details.php">Read more  <i class="fa fa-angle-double-right"></i></a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_blog">
                                            <div class="blog_thumb">
                                                <a href="<?php echo $level?>pages/blog-details.php"><img src="<?php echo $level?>assets\img\blog\blog1.jpg" alt=""></a>
                                            </div>
                                            <div class="blog_content">
                                                <div class="blog_post">
                                                    <ul>
                                                        <li>
                                                            <a href="#">Women</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <h3><a href="<?php echo $level?>pages/blog-details.php">When an unknown took a galley of type.</a></h3>
                                                <p>Distinctively simplify dynamic resources whereas prospective core competencies. Objectively pursue multidisciplinary human capital for interoperable.</p>
                                                <div class="post_footer">
                                                    <div class="post_meta">
                                                        <ul>
                                                            <li>Jun 20, 2018</li>
                                                            <li>3 Comments</li>
                                                        </ul>
                                                    </div>
                                                    <div class="Read_more">
                                                        <a href="<?php echo $level?>pages/blog-details.php">Read more  <i class="fa fa-angle-double-right"></i></a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>    
                            </div>
                            <!--blog area end-->  
                                   
                            <!--brand logo strat--> 
                            <div class="brand_logo brand_two">
                                <div class="block_title">
                                    <h3>Brands</h3>
                                </div>
                                <div class="row">
                                    <div class="brand_active owl-carousel">
                                        <div class="col-lg-2">
                                            <div class="single_brand">
                                                <a href="#"><img src="<?php echo $level?>assets\img\brand\brand1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single_brand">
                                                <a href="#"><img src="<?php echo $level?>assets\img\brand\brand2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single_brand">
                                                <a href="#"><img src="<?php echo $level?>assets\img\brand\brand3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single_brand">
                                                <a href="#"><img src="<?php echo $level?>assets\img\brand\brand4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single_brand">
                                                <a href="#"><img src="<?php echo $level?>assets\img\brand\brand5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single_brand">
                                                <a href="#"><img src="<?php echo $level?>assets\img\brand\brand6.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>       
                            <!--brand logo end-->                                             
                        </div>
                        <!--pos home section end-->