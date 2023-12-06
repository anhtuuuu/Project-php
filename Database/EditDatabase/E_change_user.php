<?php 
    session_start();
    $level ="../../";
    include_once "{$level}Database/tables/list_data_user.php";    

    // echo "connected";
    $id = $_GET['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $password = $_POST['password']; 
    $get_date_time = date('Y-m-d H:i:s');
    // Select CONVERT(varchar, GETDATE(), 103)
    $_SESSION['loginC'][0]['address'] = $address;

    $sql = $conn->prepare("update user set fullname = ?, email = ?, phone_number = ?, address = ?, password = ?, updated_at = ? where id = ?");
    $sql->execute([$fullname,$email,$phone_number,$address,$password,$get_date_time,$id]);

    header("location:{$level}pages/my-account.php?note=1")
    

?>