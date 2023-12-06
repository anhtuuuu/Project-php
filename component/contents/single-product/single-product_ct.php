<?php
    include_once "{$level}Database/tables/list_data_product.php";
    include_once "{$level}Database/tables/list_data_size.php";


    $getID = $_GET['id'];
    $sql = "select * from product where id = '$getID' ";
    $data = $conn->query($sql);
    $product_detail = $data->fetchAll(PDO::FETCH_ASSOC);
    // print_r($product_detail);

    function checkQuantity($check)
    {
        if($check == 0) return 'Out of stock';
        else return 'In stock';
    }
 ?>
 <?php         
    include_once "{$level}Database/tables/list_data_order_details.php";

  $sql2 = "select product_id,thumbnail,title,sum(num) as 'total' from product inner join order_details on product.id = order_details.product_id where deleted = '1' group by product_id,thumbnail,title ";
  $data2 = $conn->query($sql2);
  $product_order = $data2->fetchAll(PDO::FETCH_ASSOC);
//   print_r($product_order);
  ?>
 
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
 <div class="product_details">
     <div class="row">
         <div class="col-lg-5 col-md-6">
             <div class="product_tab fix">
                 <div class="product_tab_button">
                     <ul class="nav" role="tablist">
                         <li>
                             <a class="active" data-toggle="tab" href="#p_tab1" role="tab" aria-controls="p_tab1"
                                 aria-selected="false"><img src="<?php echo $level?>uploads/<?php echo $product_detail[0]['thumbnail']?>"
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
                 <div class="tab-content produc_tab_c">
                     <div class="tab-pane fade show active" id="p_tab1" role="tabpanel">
                         <div class="modal_img">
                             <a href="#"><img src="<?php echo $level?>uploads/<?php echo $product_detail[0]['thumbnail']?>" alt=""></a>
                             <div class="img_icone">
                                <img src="<?php echo $level?>assets\img\cart\span-new.png" alt="">
                             </div>
                             
                         </div>
                     </div>
                     <div class="tab-pane fade" id="p_tab2" role="tabpanel">
                         <div class="modal_img">
                             <a href="#"><img src="<?php echo $level?>assets\img\product\product14.jpg" alt=""></a>
                             <div class="img_icone">
                                <img src="<?php echo $level?>assets\img\cart\span-new.png" alt="">
                             </div>
                             <div class="view_img">
                                 <a class="large_view" href="assets\img\product\product14.jpg"><i
                                         class="fa fa-search-plus"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="p_tab3" role="tabpanel">
                         <div class="modal_img">
                             <a href="#"><img src="<?php echo $level?>assets\img\product\product15.jpg" alt=""></a>
                             <div class="img_icone">
                                <img src="<?php echo $level?>assets\img\cart\span-new.png" alt="">
                             </div>
                             <div class="view_img">
                                 <a class="large_view" href="assets\img\product\product15.jpg"> <i
                                         class="fa fa-search-plus"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
         <div class="col-lg-7 col-md-6">
             <div class="product_d_right">
                 <h1><?php echo $product_detail[0]['title']?></h1>
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
                     <p><?php echo $product_detail[0]['description']?></p>
                 </div>

                 <div class="content_price mb-15">
                     <span>$<?php echo $product_detail[0]['discount']?></span>
                     <span class="old-price">$<?php echo $product_detail[0]['price']?></span>
                 </div>
                 <div class="box_quantity mb-20">
                     <form action="<?php echo $level ?>Database/EditDatabase/E_add_to_cart.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $product_detail[0]['id'] ?>">
                        <input type="hidden" name="thumbnail" value="<?php echo $product_detail[0]['thumbnail'] ?>">
                        <input type="hidden" name="title" value="<?php echo $product_detail[0]['title'] ?>">
                        <input type="hidden" name="discount" value="<?php echo $product_detail[0]['discount'] ?>">              
                        <input type="hidden" name="num_stock" value="<?php echo $product_detail[0]['quantity'] ?>">              

                         <label>quantity</label>
                         <input name="quantity" min="1" max="<?php echo $product_detail[0]['quantity'] ?>" value="1" type="number">
                         <div class="product_d_size mb-20 mt-20">
                            <label for="group_1">size</label>
                            <select name="size" id="group_1">
                                <?php foreach($size as $sz) { ?>
                                    <option value="<?php echo $sz['id'] ?>"><?php echo $sz['size'] ?></option>
                                <?php } ?>                                
                            </select>
                        </div>
                        <button type="submit" name="btn_cart"><i class="fa fa-shopping-cart"></i> add to cart</button>
                     </form>
                     
                     
                 </div>           

                

                 <div class="product_stock mb-20">
                     <p><?php echo $product_detail[0]['quantity'] ?> items</p>
                     <span> <?php echo checkQuantity($product_detail[0]['quantity']) ?> </span>
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
     </div>
 </div>
 <!--product details end-->


 <!--product info start-->
 <div class="product_d_info">
     <div class="row">
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
                             <p>Fashion has been creating well-designed collections since 2010. The brand offers
                                 feminine designs delivering stylish separates and statement dresses which have since
                                 evolved into a full ready-to-wear collection in which every item is a vital part of a
                                 woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and
                                 unmistakable signature style. All the beautiful pieces are made in Italy and
                                 manufactured with the greatest attention. Now Fashion extends to a range of accessories
                                 including shoes, hats, belts and more!</p>
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
                             <p>Fashion has been creating well-designed collections since 2010. The brand offers
                                 feminine designs delivering stylish separates and statement dresses which have since
                                 evolved into a full ready-to-wear collection in which every item is a vital part of a
                                 woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and
                                 unmistakable signature style. All the beautiful pieces are made in Italy and
                                 manufactured with the greatest attention. Now Fashion extends to a range of accessories
                                 including shoes, hats, belts and more!</p>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="reviews" role="tabpanel">
                         <div class="product_info_content">
                             <p>Fashion has been creating well-designed collections since 2010. The brand offers
                                 feminine designs delivering stylish separates and statement dresses which have since
                                 evolved into a full ready-to-wear collection in which every item is a vital part of a
                                 woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and
                                 unmistakable signature style. All the beautiful pieces are made in Italy and
                                 manufactured with the greatest attention. Now Fashion extends to a range of accessories
                                 including shoes, hats, belts and more!</p>
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
                        <span class="product_price">$50.00</span>
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
 <!--new product area start-->