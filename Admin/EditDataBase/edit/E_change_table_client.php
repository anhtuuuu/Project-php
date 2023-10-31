<?php 
    $level ="../../";
    include_once "{$level}Database/tables/list_data_tables_client.php";    

    // echo "connected";
    $id = $_GET['id'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $startdate = $_POST['startdate'];
   
    $sql = $conn->prepare("update data_table_client_management set name = ?, password = ?, email = ?, startdate = ? where id = ?");
    $sql->execute([$name,$password,$email,$startdate,$id]);
    echo '<h2 style="color: #34a853"> Changed successful information client </h2> ';
    echo "<a href='{$level}pages/tables-data-client.php'> Return to table data client </a>"

?>