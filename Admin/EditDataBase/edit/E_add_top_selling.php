<?php
    $level = "../../";
    include_once "{$level}Database/dashboard/list_data_topSelling.php";    
    $status_default = "In stock";
    $count_id = 0;
    foreach($topSelling as $rcs)
    {
        $count_id++;
    }
    // echo     $count_id ;
    ++$count_id;
    if($count_id < 10) $count_id = '0'.$count_id;
    // echo     $count_id ;

    $next_id = 'L'.$count_id;
    // echo     $next_id 
    $preview = basename($_FILES['preview']['name']);
    // echo $preview;
    $target_file = "{$level}../uploads/".$preview;
    move_uploaded_file($_FILES['preview']['tmp_name'],$target_file);

    $st = $conn->prepare("insert into data_table_products values(?,?,?,?,?,?,?)");
    $st->execute([$next_id,$preview,$_POST['product_name'],$_POST['price'],$_POST['manufacturing_country'],$_POST['tyle'], $status_default]);

    header("location:{$level}pages/tables-data-product.php")

?>