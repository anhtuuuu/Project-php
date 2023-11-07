<?php
    $level = "../../";
    include_once "{$level}Database/tables/list_data_tables_bill_detail.php";    
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
   
    $st = $conn->prepare("insert into data_table_bill_detail values(?,?,?,?,?)");
    $st->execute([$next_id,$_POST['bill_ID'],$_POST['product_ID'],$_POST['quantity'], $status_default]);
    echo '<h2 style="color: #34a853"> Added successful imformation bill detail </h2> ';
    echo "<a href='{$level}pages/tables-data-bill-detail.php'> Return to table data </a>"

?>