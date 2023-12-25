<?php
    if(!isset($_SESSION['loginC']))
    {
        header("location:{$level}pages/login.php");
    }
?>
<?php
if(isset($_GET['delcart']) && $_GET['delcart'] == 1) unset($_SESSION['cart']);
if(isset($_GET['del']))
{
    array_splice($_SESSION['cart'],$_GET['del'],1);
}
function cartTotal()
{
    if(isset($_SESSION['cart']))
    {   
        $cart_total = 0;
        for($i=0; $i< sizeof($_SESSION['cart']); $i++)
        {
            $total = $_SESSION['cart'][$i][4] * $_SESSION['cart'][$i][5];
            $cart_total += $total;            
        }
        return $cart_total;
    }
}
function shippingFee()
{
    if(isset($_SESSION['cart']))
    {   
        $shippingFee = cartTotal()*0.06;        
        return $shippingFee;
    }
}
function showSize($check)
{
    if($check == 1) return "S";
    if($check == 2) return "M"; 
    if($check == 3) return "L"; 

}
function showCart()
{
    if(isset($_SESSION['cart']))
    {   
        if(sizeof($_SESSION['cart']) > 0)
        {
            for($i=0; $i< sizeof($_SESSION['cart']); $i++)
            {
                $total = $_SESSION['cart'][$i][4] * $_SESSION['cart'][$i][5];
                $_SESSION['cart'][$i][7] = $total;
                echo '<tr>                    
                        <td class="product_thumb"><a href="#" class="w-50"><img src="../uploads/'.$_SESSION['cart'][$i][1].'" alt=""></a></td>
                        <td class="product_name"><a href="#">'.$_SESSION['cart'][$i][2].'</a></td>
                        <td class="product-size"><h5>'.showSize($_SESSION['cart'][$i][3]).'</h5></td>
                        <td class="product-price">$'.$_SESSION['cart'][$i][4].'</td>
                        <td class="product_quantity"><input min="1" max="'.$_SESSION['cart'][$i][6].'" value="'.$_SESSION['cart'][$i][5].'" type="number" name="'.$_SESSION['cart'][$i][0].'"></td>
                        <td class="product_total">$'.$_SESSION['cart'][$i][7].'</td>
                        <td class="product_remove"><a href="../pages/cart.php?del='.$i.'"><i class="fa fa-trash-o"></i></a></td>
                    </tr>';
            }         

        }
        else
        {            
            echo '<tr> 
                        <td><h5>Your cart is empty</h5></td>
                    </tr>';
        }
    }
    else
    {
        echo '<tr> 
                <td><h5>Your cart is empty</h5></td>
            </tr>';
    }
}

// var_dump($_SESSION['loginC']);
// var_dump($_SESSION['cart']);
function checkFail()
{
    if(isset($_GET['fail'])) 
    {
        if($_GET['fail'] == 1)
            return "<p class='text-danger'>The product is not enough stock.</p>";
        if($_GET['fail'] == 2)
            return "<p class='text-danger'>Your cart is empty.</p>";

    }
    else return "";
}

?> 

     <!--breadcrumbs area start-->
     <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="<?php echo $level?>index.php">home</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Shopping Cart</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->



                         <!--shopping cart area start -->
                        <div class="shopping_cart_area">
                            <form action="<?php echo $level?>Database/EditDatabase/E_buy_cart.php" method="POST"> 
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table_desc">
                                                <div class="cart_page table-responsive">
                                                    <table>
                                                <thead>
                                                    <tr> 
                                                        <th class="product_thumb">Image</th>
                                                        <th class="product_name">Product</th>
                                                        <th class="product-size">Size</th>
                                                        <th class="product-price">Price</th>
                                                        <th class="product_quantity">Quantity</th>
                                                        <th class="product_total">Total</th>
                                                        <th class="product_remove">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        showCart();
                                                    ?>
                                                    
                                                </tbody>
                                            </table>   
                                                </div>                                                 
                                                <div class="cart_submit">                                                    
                                                    <button type="submit" name="update">Update cart</button>
                                                    <a href="<?php echo $level ?>pages/cart.php?delcart=1"><button type="button">Delete all</button></a>
                                                    <a href="<?php echo $level ?>index.php"><button type="button">Keep shopping</button></a>
                                                    <!-- <button type="submit">Buy </button> -->
                                                </div>      
                                            </div>
                                         </div>
                                     </div>
                                     <!--coupon code area start-->
                                    <div class="coupon_area">
                                        <div class="row"> <!-- d-flex flex-row-reverse -->
                                            <div class="col-lg-6 col-md-6">
                                                <div class="coupon_code">
                                                    <h3>Shipping address</h3>
                                                    <div class="coupon_inner">   
                                                        <input type="hidden" name="id" value="<?php echo $_SESSION['loginC'][0]['id'] ?>">
                                                        <label for="fullname">Enter your full name.</label>                                
                                                        <input required placeholder="Full name" type="text" name="fullname" id="fullname" value="<?php echo $_SESSION['loginC'][0]['fullname'] ?>">  
                                                        <label for="address">Enter your address.</label>                                
                                                        <input required placeholder="Address" type="text" name="address" id="address" value="<?php echo $_SESSION['loginC'][0]['address'] ?>" >
                                                        <label for="phone_number">Enter your phone number.</label>                                
                                                        <input required placeholder="Phone number" type="text" name="phone_number" id="phone_number" value="<?php echo $_SESSION['loginC'][0]['phone_number'] ?>">
                                                        <label for="email">Enter your email.</label>                                
                                                        <input required placeholder="Email" type="email" name="email" id="email" value="<?php echo $_SESSION['loginC'][0]['email'] ?>">   
                                                        <label for="note">Notes.</label>                                
                                                        <textarea id="note" name="note" cols="30" rows="10" placeholder="Note to sellers"></textarea>   
                                                        <input type="hidden" name="cart_total" value="<?php echo cartTotal()+shippingFee() ?>">                                                                                                   
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="coupon_code">
                                                    <h3>Cart Totals</h3>
                                                    <div class="coupon_inner">
                                                       <div class="cart_subtotal">
                                                           <p>Total Product</p>
                                                           <p class="cart_amount">$<?php echo cartTotal() ?></p>
                                                       </div>
                                                       <div class="cart_subtotal ">
                                                           <p>Shipping fee</p>
                                                           <p class="cart_amount"><span style="font-size:14px;" class="text-secondary">(6% Total Product)</span>$<?php echo shippingFee() ?></p>
                                                       </div>
                                                       <a href=""></a>

                                                       <div class="cart_subtotal">
                                                           <p>Total</p>
                                                           <p class="cart_amount">$<?php echo cartTotal()+shippingFee() ?></p>
                                                       </div>
                                                       <div class="checkout_btn">                                                          
                                                           <button type="submit" name="buy_now">Buy now</button>
                                                           <?php echo checkFail() ?>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--coupon code area end-->
                                </form> 
                         </div>
                         <!--shopping cart area end -->
<?php
    if(isset($_GET['update']) && $_GET['update'] == 1){ echo "<script> alert('Successful update'); </script>"; }
    if(isset($_GET['update']) && $_GET['update'] == 0){ echo "<script> alert('Your cart is empty'); </script>"; }
    if(isset($_GET['update']) && $_GET['update'] == 2){ echo "<script> alert('Successful bought !!!'); </script>"; }    
  

?>
