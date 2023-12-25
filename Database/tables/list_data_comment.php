<?php   
    include_once "{$level}Database/connect/connect_database.php";
    $data_comments = $conn->query("SELECT * FROM comments");
    $comments = $data_comments->fetchAll(PDO::FETCH_ASSOC);    
?>