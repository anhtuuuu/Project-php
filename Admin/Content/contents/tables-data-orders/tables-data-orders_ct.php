<?php
    include_once "{$level}Database/dashboard/list_data_recentSales.php";
    include_once "{$level}Database/dashboard/list_data_topSelling.php";
    function check_status($check)
    {
        if($check == 'Approved') return 'success';
        if($check == 'Pending') return 'warning';
        if($check == 'Rejected') return 'danger';                           
    }
    function check_status_2($check)
    {
        if($check == 'In stock') return 'success';
        if($check == 'Out of stock') return 'danger';                           
    }

     // link and button delete & restore for recent sales
     function restore_or_delete_btn_rs($check){
        if($check == 'Rejected') return '<i title="Restore" class="bi bi-arrow-counterclockwise"></i>';
        else return '<i title="Delete" class="bi bi-trash"></i>';
    }
    function restore_or_delete_link_rs($check){
        if($check == 'Rejected') return 'E_restore_recent_sales.php';
        else return 'E_delete_recent_sales.php';
    }

    // link and button delete & restore for top selling
    function restore_or_delete_btn_tsl($check){
        if($check == 'Out of stock') return '<i title="Restore" class="bi bi-arrow-counterclockwise"></i>';
        else return '<i title="Delete" class="bi bi-trash"></i>';
    }
    function restore_or_delete_link_tsl($check){
        if($check == 'Out of stock') return 'E_restore_top_selling.php';
        else return 'E_delete_top_selling.php';
    }
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo $level?>index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <form action="<?php echo $level ?>pages/pages-search.php" method="POST">
                        <input class="datatable-input" placeholder="Search with id..." type="text" title="Search within table" name="search" >
                        <button type="submit"><i style="font-size:20px; color:black;" class="bi bi-search"></i></button>
                    </form>  
              <h5 class="card-title">Bills</h5>
            
              <!-- Table with stripped rows -->
              <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <?php $col = array('Id','Bill date','Id user','Id employee','invoice_value','Status','Edit');
                                    foreach($col as $c)
                                    {
                                      echo '<th scope="col">'.$c.'</th>';
                                    }
                                  ?>

                                        </tr>
                                    </thead>
                                    <tbody>                                            

                               
                                    <?php
                                    
                                    foreach($recentSales as $rcs):
                                    ?>
                                        <tr>
                                            <th scope="row"><a href="#"><?php echo $rcs['id']?></a></th>
                                            <td><?php echo $rcs['bill_date']?></td>
                                            <td><?php echo $rcs['id_user']?></td>
                                            <td><?php echo $rcs['id_employee']?></td>
                                            <td><?php echo $rcs['invoice_value']?></td>
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
                               
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>