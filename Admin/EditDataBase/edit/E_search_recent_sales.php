<?php
    $level = "../../";
    include_once "{$level}Database/dashboard/list_data_recentSales.php";    
    include_once "{$level}Database/dashboard/list_data_topSelling.php";    

    $search = $_POST['search'];
    $count1 =0;
    $count2 =0;

    $length1 =0;
    $length2 =0;

    foreach($recentSales as $rs)
    {        
        ++$length1;
    }
    foreach($topSelling as $rs)
    {        
        ++$length2;
    }
    foreach($recentSales as $rs)
    {
        if($rs['id'] == $search){ echo $rs["id"], " ", $rs["customer"], " ", $rs["product"], " ", $rs["price"], " ", $rs["status"], " ";   
            return;
        }     
        ++$count1;
    }
    foreach($topSelling as $tsl)
    {
        if($tsl['id'] == $search){ echo $tsl["id"], " ",$tsl["preview"], " ", $tsl["product"], " ", $tsl["price"], " ", $tsl["sold"], " ", $tsl["revenue"], " ", $tsl["status"], " ";   
            return;
        }     
        ++$count2;
    }
    if($count1 == $length1) echo "Undefinded product ", $search;
    if($count2 == $length2) echo "Undefinded product ", $search;

    

?>