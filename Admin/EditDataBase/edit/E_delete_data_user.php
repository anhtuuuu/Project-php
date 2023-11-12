<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_user.php";    

    // echo "connected";
   
    $id = $_GET['id'];
    $get_date_time = date('Y-m-d H:i:s');

        // echo $a;
    $sql = $conn->prepare("update user set deleted = 0, updated_at = ? where id = ?;");
    $sql->execute([$get_date_time,$id]);

   header("location:{$level}pages/table-data-user.php")

?>