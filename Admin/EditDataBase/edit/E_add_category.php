<?php
    $level = "../../";
    include_once "{$level}Database/tables/list_data_category.php";       
    $name = $_POST['name'];
    $data = $conn->query("SELECT max(id) FROM category");
    $print = $data->fetch(PDO::FETCH_ASSOC);    
    // print_r($category);    
    $next_id = $print['max(id)'] + 1;
    echo 'next id = '.$next_id;  

    $st = $conn->prepare("insert into category values(?,?)");
    $st->execute([$next_id,$name]);

    header("location:{$level}pages/table-data-category.php")

?>