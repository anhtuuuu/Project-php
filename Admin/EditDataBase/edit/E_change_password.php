<?php 
    session_start();
    $level ="../../";
    include_once "{$level}Database/tables/list_data_user.php";    

    // echo "connected";
    $id = $_GET['id'];
    $password = $_POST['password']; 
    $newPassword = $_POST['newpassword']; 
    $rePassword = $_POST['renewpassword']; 

    // Select CONVERT(varchar, GETDATE(), 103)
    if($_SESSION['login'][0]['password'] != $password)
    {
        header("location:{$level}pages/users-profile.php#profile-change-password");
    
    }

    $sql = $conn->prepare("update user set password = ? where id = ?");
    $sql->execute([$newPassword,$id]);

    if(isset($_SESSION['login']))
    {
        $_SESSION['login'][0]['password'] = $password;
    
    }

    // header("location:{$level}pages/users-profile.php")
    

?>