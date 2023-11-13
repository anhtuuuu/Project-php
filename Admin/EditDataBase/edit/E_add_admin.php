<?php
    $level = "../../";
    include_once "{$level}Database/tables/list_data_user.php";   
    
    $next_id = count($user) + 1;
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $role_id_default = 1;
    $created_at = date('Y-m-d H:i:s'); 
    $updated_at = date('Y-m-d H:i:s'); 
    $status_default = 1;       

    $st = $conn->prepare("insert into user values(?,?,?,?,?,?,?,?,?,?)");
    $st->execute([$next_id,$fullname,$email,$phone_number,$address,$password,$role_id_default,$created_at,$updated_at,$status_default]);

    header("location:{$level}pages/table-data-user.php")

?>