
<?php
    $level = "../../";
    include_once "{$level}Database/dashboard/list_data_recentSales.php";    
    include_once "{$level}Database/dashboard/list_data_topSelling.php";    

    $search = $_POST['search'];


        if(isset($_POST['']))
        {?>
        <?php
            $search = $_POST['search'];
            $sql = "select * from dashboard_recentsales where id like '%$search%'";
            $result = $db -> prepare($sql);
            $result -> execute();
            $rowsdata = $result->fetchAll();
            $i = 0;
            foreach($rowsdata as $value)
            {
                ++$i;
            }
        ?>
        
        <?php
            if($search == '')
            {?>
                <div class="text-center lead mb-5">
                    No results found for: &nbsp; <span class="fw-bold"><?php echo $search ?></span>
                </div>
                <h1 class="text-center" style="color: red; text-transform: uppercase;">Sorry</h1>
                <p class="text-center">
                    There are no results for your search
                </p>
            <?php
            }
        ?>

            <?php
                if($search != '')
            {?>
                    <div class="text-center lead mb-5"><?php echo $i?> results found for: &nbsp; "<span class="fw-bold"><?php echo $search ?></span>"</div>
                    <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <?php $col = array('Id','Customer','Product','Price','Status','Edit');
                                    foreach($col as $c)
                                    {
                                      echo '<th scope="col">'.$c.'</th>';
                                    }
                                  ?>

                                        </tr>
                                    </thead>
                                    <tbody>                                            

                               
                                    <?php
                                    
                                    foreach($rowsdata as $rcs):
                                    ?>
                                        <tr>
                                            <th scope="row"><a href="#"><?php echo $rcs['id']?></a></th>
                                            <td><?php echo $rcs['customer']?></td>
                                            <td><a href="#" class="text-primary"><?php echo $rcs['product']?></a></td>
                                            <td><?php echo $rcs['price']?></td>
                                            <td><span
                                                    class="badge bg-<?php echo check_status($rcs['status'])?>"><?php echo $rcs['status']?></span>
                                            </td>
                                            <td>
                                                <a href="<?php echo $level ?>EditDataBase/edit/<?php echo restore_or_delete_link_rs($rcs['status']) ?>?id=<?php echo $rcs['id'] ?>"
                                                    style="margin:0 5px;"><?php echo restore_or_delete_btn_rs($rcs['status']) ?></a>
                                                <a href="<?php echo $level ?>EditDataBase/FormEdit/F_edit_recent_sales.php?id=<?php echo $rcs['id'] ?>"
                                                    style="margin:0 5px;"><i title="Edit" class="bi bi-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
        <?php }}?>               



<!-- 

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

    

?> -->