<?php
    $level = "../../";
    include_once "{$level}Database/tables/list_data_tables_client.php";    
    $status_default = "online";
    $count_id = 0;
    foreach($clients as $client)
    {
        $count_id++;
    }
    // echo     $count_id ;
    ++$count_id;
    if($count_id < 10) $count_id = '0'.$count_id;
    // echo     $count_id ;

    $next_id = $count_id;
    // echo     $next_id 
   
    $st = $conn->prepare("insert into data_table_client_management values(?,?,?,?,?,?)");
    $st->execute([$next_id,$_POST['name'],$_POST['address'],$_POST['phone'],$_POST['startdate'], $status_default]);

    header("location:{$level}pages/tables-data-client.php")


?>