<?php
    session_start();
    $level = "../../";
    include_once "{$level}Database/tables/list_data_user.php";
    include_once "{$level}Database/tables/list_data_orders.php";
    include_once "{$level}Database/tables/list_data_order_details.php";

    $result = $conn->query("SELECT max(id) FROM orders");
    $data = $result->fetch(PDO::FETCH_ASSOC); 
    $maxID = $data["max(id)"];

    $result2 = $conn->query("SELECT max(id) FROM order_details");
    $data2 = $result2->fetch(PDO::FETCH_ASSOC); 
    $maxID_detail = $data2["max(id)"];

    if(isset($_POST['buy_now']))
    {
        // orders
        $id_user = $_POST['id'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $status_default = 1;
        $id_order = $maxID + 1;
        $get_date_time = date('Y-m-d H:i:s');
        $total_order = $_POST['cart_total'];        

        //order detail
        $next_id = $maxID_detail +1;     
        
        if(isset($_SESSION['cart']))
        {
            for($i = 0; $i < sizeof($_SESSION['cart']); $i++)
            {
                if($_SESSION['cart'][$i][5] > $_SESSION['cart'][$i][6])
                {
                    header("location:{$level}pages/cart.php?fail=1");
                }
            }
        }
        

        // add to orders
        if($total_order == 0)
        {
            header("location:{$level}pages/cart.php?fail=2");
        }
        else
        {
        $sql = "insert into orders values(?,?,?,?,?,?,?,?,?)" ;
        $st = $conn->prepare($sql);
        $st->execute([$id_order,$id_user,$fullname,$email,$phone_number,$address,$note,$get_date_time,$status_default]);
        }
        // add to orders detail
        if(isset($_SESSION['cart']))
        {
            for($i = 0; $i < sizeof($_SESSION['cart']); $i++)
            {
                $sql2 = "insert into order_details value(?,?,?,?,?,?,?)"; 
                $st2 = $conn->prepare($sql2);
                $st2->execute([$next_id,$id_order,$_SESSION['cart'][$i][0],$_SESSION['cart'][$i][3],$_SESSION['cart'][$i][4],$_SESSION['cart'][$i][5],$_SESSION['cart'][$i][7]]);
                
                $quatity = $_SESSION['cart'][$i][5];
                $id_product = $_SESSION['cart'][$i][0];
                $minus_qtt = $conn->prepare("update product set quantity = quantity - ? where id = ? ");
                $minus_qtt->execute([$quatity,$id_product]);
                $next_id++;
            }
            unset($_SESSION["cart"]);
            header("location:{$level}pages/cart.php?update=2");

        }
        
    }

    if(isset($_POST['update']))
    {        
        if(isset($_SESSION['cart']))
        {
            for($i = 0; $i < sizeof($_SESSION['cart']); $i++)
            {
                $_SESSION['cart'][$i]['5'] = $_POST[$_SESSION['cart'][$i]['0']];
            }
            header("location:{$level}pages/cart.php?update=1");
        }
        else{
            header("location:{$level}pages/cart.php?update=0");
        }        
    }
  
?>