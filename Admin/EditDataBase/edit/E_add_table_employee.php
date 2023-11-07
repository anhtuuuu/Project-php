<?php
    $level = "../../";
    include_once "{$level}Database/tables/list_data_tables_employee.php";    
    $status_default = "Working";
    $count_id = 0;
    foreach($employee as $el)
    {
        $count_id++;
    }
    // echo     $count_id ;
    ++$count_id;
    if($count_id < 10) $count_id = '0'.$count_id;
    // echo     $count_id ;

    $next_id = $count_id;
    // echo     $next_id 
   
    $st = $conn->prepare("insert into data_table_employee_management values(?,?,?,?,?,?)");
    $st->execute([$next_id,$_POST['name'],$_POST['position'],$_POST['age'],$_POST['startdate'], $status_default]);

    header("location:{$level}pages/tables-data-employee.php")


?>