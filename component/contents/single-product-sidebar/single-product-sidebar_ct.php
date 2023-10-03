<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="<?php echo $level?>index.php">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>single product</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->


<!--product wrapper start-->
<div class="product_details sidebar">
    <div class="row">
        <div class="col-lg-3 col-md-12">
            <!--layere categorie"-->
            <div class="sidebar_widget shop_c sidebar">
                <div class="categorie__titile">
                    <h4>Categories</h4>
                </div>
                <div class="layere_categorie">
                    <ul>
                        <li>
                            <input id="acces" type="checkbox">
                            <label for="acces">Accessories<span>(1)</span></label>
                        </li>
                        <li>
                            <input id="dress" type="checkbox">
                            <label for="dress">Dresses <span>(2)</span></label>
                        </li>
                        <li>
                            <input id="tops" type="checkbox">
                            <label for="tops">Tops<span>(3)</span></label>
                        </li>
                        <li>
                            <input id="bag" type="checkbox">
                            <label for="bag">HandBags<span>(4)</span></label>
                        </li>
                    </ul>
                </div>
            </div>
            <!--layere categorie end-->

            <!--color area start-->
            <div class="sidebar_widget color">
                <h2>Color</h2>
                <div class="widget_color">
                    <ul>

                        <li><a href="#">Black <span>(10)</span></a></li>

                        <li><a href="#">Orange <span>(12)</span></a></li>

                        <li> <a href="#">Blue <span>(14)</span></a></li>

                        <li><a href="#">Yellow <span>(15)</span></a></li>

                        <li><a href="#">pink <span>(16)</span></a></li>

                        <li><a href="#">green <span>(11)</span></a></li>

                    </ul>
                </div>
            </div>
            <!--color area end-->

            <!--price slider start-->
            <div class="sidebar_widget price">
                <h2>Price</h2>
                <div class="ca_search_filters">

                    <input type="text" name="text" id="amount">
                    <div id="slider-range"></div>
                </div>
            </div>
            <!--price slider end-->

            <!--wishlist block start-->
            <div class="sidebar_widget wishlist mb-30">
                <div class="block_title">
                    <h3><a href="#">Wishlist</a></h3>
                </div>
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
                <div class="block_content">
                    <p>2 products</p>
                    <a href="#">» My wishlists</a>
                </div>
            </div>
            <!--wishlist block end-->

            <!--popular tags area-->
            <div class="sidebar_widget tags  mb-30">
                <div class="block_title">
                    <h3>popular tags</h3>
                </div>
                <div class="block_tags">
                    <a href="#">ipod</a>
                    <a href="#">sam sung</a>
                    <a href="#">apple</a>
                    <a href="#">iphone 5s</a>
                    <a href="#">superdrive</a>
                    <a href="#">shuffle</a>
                    <a href="#">nano</a>
                    <a href="#">iphone 4s</a>
                    <a href="#">canon</a>
                </div>
            </div>
            <!--popular tags end-->

            <!--newsletter block start-->
            <div class="sidebar_widget newsletter mb-30">
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

            <!--special product start-->
            <div class="sidebar_widget special">
                <div class="block_title">
                    <h3>Special Products</h3>
                </div>
                <div class="special_product_inner mb-20">
                    <div class="special_p_thumb">
                        <a href="#"><img src="<?php echo $level?>assets\img\cart\cart3.jpg" alt=""></a>
                    </div>
                    <div class="small_p_desc">
                        <div class="product_ratting">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h3><a href="#">Lorem ipsum dolor</a></h3>
                        <div class="special_product_proce">
                            <span class="old_price">$124.58</span>
                            <span class="new_price">$118.35</span>
                        </div>
                    </div>
                </div>
                <div class="special_product_inner">
                    <div class="special_p_thumb">
                        <a href="#"><img src="<?php echo $level?>assets\img\cart\cart18.jpg" alt=""></a>
                    </div>
                    <div class="small_p_desc">
                        <div class="product_ratting">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h3><a href="#">Printed Summer</a></h3>
                        <div class="special_product_proce">
                            <span class="old_price">$124.58</span>
                            <span class="new_price">$118.35</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--special product end-->
        </div>
        <div class="col-lg-9 col-md-12">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product_tab sidebar fix">

                        <div class="tab-content produc_tab_c">
                            <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                                <div class="modal_img">
                                    <a href="#"><img src="<?php echo $level?>assets\img\product\productbig.jpg"
                                            alt=""></a>
                                    <div class="img_icone">
                                       <img src="<?php echo $level?>assets\img\cart\span-new.png" alt="">
                                    </div>
                                    <div class="view_img">
                                        <a class="large_view" href="assets\img\product\productbig.jpg"><i
                                                class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="p_tab2" role="tabpanel">
                                <div class="modal_img">
                                    <a href="#"><img src="<?php echo $level?>assets\img\product\productbig1.jpg"
                                            alt=""></a>
                                    <div class="img_icone">
                                       <img src="<?php echo $level?>assets\img\cart\span-new.png" alt="">
                                    </div>
                                    <div class="view_img">
                                        <a class="large_view" href="assets\img\product\productbig1.jpg"><i
                                                class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="p_tab3" role="tabpanel">
                                <div class="modal_img">
                                    <a href="#"><img src="<?php echo $level?>assets\img\product\productbig2.jpg"
                                            alt=""></a>
                                    <div class="img_icone">
                                       <img src="<?php echo $level?>assets\img\cart\span-new.png" alt="">
                                    </div>
                                    <div class="view_img">
                                        <a class="large_view" href="assets\img\product\productbig2.jpg"> <i
                                                class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product_tab_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#p_tab1" role="tab" aria-controls="p_tab1"
                                        aria-selected="false"><img src="<?php echo $level?>assets\img\cart\cart.jpg"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#p_tab2" role="tab" aria-controls="p_tab2"
                                        aria-selected="false"><img src="<?php echo $level?>assets\img\cart\cart2.jpg"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#p_tab3" role="tab" aria-controls="p_tab3"
                                        aria-selected="false"><img src="<?php echo $level?>assets\img\cart\cart4.jpg"
                                            alt=""></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <h1>Printed Summer Dress</h1>
                        <div class="product_ratting mb-10">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"> Write a review </a></li>
                            </ul>
                        </div>
                        <div class="product_desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati modi culpa voluptates
                                illo, quos magni totam inventore delectus perspiciatis necessitatibus, iure rerum!
                                Deleniti nobis voluptatibus minus, iusto ullam quae esse..</p>
                        </div>

                        <div class="content_price mb-15">
                            <span>$118.00</span>
                            <span class="old-price">$130.00</span>
                        </div>
                        <div class="box_quantity mb-20">
                            <form action="#">
                                <label>quantity</label>
                                <input min="0" max="100" value="1" type="number">
                            </form>
                            <button type="submit"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            <a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </div>
                        <div class="product_d_size mb-20">
                            <label for="group_1">size</label>
                            <select name="size" id="group_1">
                                <option value="1">S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                            </select>
                        </div>

                        <div class="sidebar_widget color">
                            <h2>Choose Color</h2>
                            <div class="widget_color">
                                <ul>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li> <a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="product_stock mb-20">
                            <p>299 items</p>
                            <span> In stock </span>
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
                <!--product info start-->
                <div class="product_d_info sidebar">
                    <div class="col-12">
                        <div class="product_d_inner">
                            <div class="product_info_button">
                                <ul class="nav" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info"
                                            aria-selected="false">More info</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                            aria-selected="false">Data sheet</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                            aria-selected="false">Reviews</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="info" role="tabpanel">
                                    <div class="product_info_content">
                                        <p>Fashion has been creating well-designed collections since 2010. The brand
                                            offers feminine designs delivering stylish separates and statement dresses
                                            which have since evolved into a full ready-to-wear collection in which every
                                            item is a vital part of a woman's wardrobe. The result? Cool, easy, chic
                                            looks with youthful elegance and unmistakable signature style. All the
                                            beautiful pieces are made in Italy and manufactured with the greatest
                                            attention. Now Fashion extends to a range of accessories including shoes,
                                            hats, belts and more!</p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="sheet" role="tabpanel">
                                    <div class="product_d_table">
                                        <form action="#">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="first_child">Compositions</td>
                                                        <td>Polyester</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Styles</td>
                                                        <td>Girly</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="first_child">Properties</td>
                                                        <td>Short Dress</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                    <div class="product_info_content">
                                        <p>Fashion has been creating well-designed collections since 2010. The brand
                                            offers feminine designs delivering stylish separates and statement dresses
                                            which have since evolved into a full ready-to-wear collection in which every
                                            item is a vital part of a woman's wardrobe. The result? Cool, easy, chic
                                            looks with youthful elegance and unmistakable signature style. All the
                                            beautiful pieces are made in Italy and manufactured with the greatest
                                            attention. Now Fashion extends to a range of accessories including shoes,
                                            hats, belts and more!</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel">
                                    <div class="product_info_content">
                                        <p>Fashion has been creating well-designed collections since 2010. The brand
                                            offers feminine designs delivering stylish separates and statement dresses
                                            which have since evolved into a full ready-to-wear collection in which every
                                            item is a vital part of a woman's wardrobe. The result? Cool, easy, chic
                                            looks with youthful elegance and unmistakable signature style. All the
                                            beautiful pieces are made in Italy and manufactured with the greatest
                                            attention. Now Fashion extends to a range of accessories including shoes,
                                            hats, belts and more!</p>
                                    </div>
                                    <div class="product_info_inner">
                                        <div class="product_ratting mb-10">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                            <strong>Posthemes</strong>
                                            <p>09/07/2018</p>
                                        </div>
                                        <div class="product_demo">
                                            <strong>demo</strong>
                                            <p>That's OK!</p>
                                        </div>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <h2>Add a review </h2>
                                            <p>Your email address will not be published. Required fields are marked </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author" type="text">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email" type="text">
                                                </div>
                                            </div>
                                            <button type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--product info end-->
            <!--Related Products area start-->
            <div class="new_product_area">
                <div class="block_title">
                    <h3>Related Products</h3>
                </div>
                <div class="row">
                    <div class="product_active owl-carousel">
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="<?php echo $level?>single-product.php"><img
                                            src="<?php echo $level?>assets\img\product\product1.jpg" alt=""></a>
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
            <!--Related Products area end-->

        </div>

    </div>

</div>
<!--product details end-->