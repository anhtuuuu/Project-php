<?php
    session_start();
    if(!isset($_SESSION['loginC']))
    {
        header("location:{$level}pages/login.php");
    }
  ?>
<?php
    // session_start();
   if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
   if(isset($_POST['btn_cart']))
   {
        $id = $_POST['id'];
        $thumbnail = $_POST['thumbnail'];
        $title = $_POST['title'];
        $size = $_POST['size'];       
        $price = $_POST['discount'];
        $quantity = $_POST['quantity'];
        $num_stock = $_POST['num_stock'];
        $total = $price * $quantity;

        $fl = 0;
        for($i=0; $i<sizeof($_SESSION['cart']); $i++)
        {
            if($_SESSION['cart'][$i][0] == $id && $_SESSION['cart'][$i][3] == $size)
            {
                $fl = 1;
                $newQuantity = $quantity + $_SESSION['cart'][$i][5];
                $_SESSION['cart'][$i][5] = $newQuantity;
                break;
            }
        }
        if($fl == 0)
        {
            $cart = [$id,$thumbnail,$title,$size,$price,$quantity,$num_stock,$total];
            $_SESSION['cart'][] = $cart;
        }        
        header("location:../../pages/cart.php");
   }
?>