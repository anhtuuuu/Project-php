<?php
    include_once "{$level}Database/connect_database.php";


    $data_search_rs = $conn->query("SELECT * FROM data_table_bills where id like '%$search%'");
    $searchData_rs = $data_search_rs->fetchAll(PDO::FETCH_ASSOC);    

    $data_search_tsl = $conn->query("SELECT * FROM data_table_products where id like '%$search%'");
    $searchData_tsl = $data_search_tsl->fetchAll(PDO::FETCH_ASSOC);  


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
<?php
    if(isset($_POST['btn']))
    {
    $value_ip = $_POST['search'];
    $data_search_pd = $conn->query("SELECT * FROM data_table_products where id like '%$value_ip%' or product_name like '%$value_ip%' or price like '%$value_ip%' or manufacturing_country like '%$value_ip%'");
    $list_search_pd = $data_search_pd->fetchAll(PDO::FETCH_ASSOC); 

    $data_search_epl = $conn->query("SELECT * FROM data_table_employee_management where id like '%$value_ip%' or name like '%$value_ip%' or position like '%$value_ip%' or age like '%$value_ip%' or startdate like '%$value_ip%'");
    $list_search_epl = $data_search_epl->fetchAll(PDO::FETCH_ASSOC); 

    $data_search_cle = $conn->query("SELECT * FROM data_table_client_management where id like '%$value_ip%' or name like '%$value_ip%' or address like '%$value_ip%' or phone like '%$value_ip%' or startdate like '%$value_ip%' or sales like '%$value_ip%'");
    $list_search_cle = $data_search_cle->fetchAll(PDO::FETCH_ASSOC);

    $data_search_bl = $conn->query("SELECT * FROM data_table_bills where id like '%$value_ip%' or bill_date like '%$value_ip%' or id_user like '%$value_ip%' or id_employee like '%$value_ip%'");
    $list_search_bl = $data_search_bl->fetchAll(PDO::FETCH_ASSOC);

    // print_r($list_search);

    
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
            <form action="<?php echo $level?>pages/pages-search.php" method="POST">
                        <input class="datatable-input" placeholder="Search with id..." type="text" title="Search within table" name="search" >
                        <button type="submit" name='btn'><i style="font-size:20px; color:black;" class="bi bi-search"></i></button>
            </form>  
            
              <h5 class="card-title">Product</h5>
            
              <!-- Table with stripped rows -->
              <table class="table table-borderless">
                                    <thead>
                                        <tr>

                                            <?php $col_sl = array('Id','Preview','Name','Price','Manufacturing_country','Tyle','Status','Edit');
                                            foreach($col_sl as $csl)
                                            {
                                              echo '<th scope="col">'.$csl.'</th>';
                                            }
                                          ?>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                      foreach($list_search_pd as $tsl):
                                      ?>
                                        <tr>
                                            <td><?php echo $tsl['id']?></td>
                                            <th scope="row"><a href="#"><img style="width:60px; height:78px;border-radius:10px;"
                                                        src="<?php echo $level?>../uploads/<?php echo $tsl['preview']?>"
                                                        alt=""></a>
                                            </th>
                                            <td><a href="#" class="text-primary fw-bold"><?php echo $tsl['product_name']?></a>
                                            </td>
                                            <td><?php echo $tsl['price']?></td>
                                            <td class="fw-bold"><?php echo $tsl['manufacturing_country']?></td>
                                            <td><?php echo $tsl['type']?></td>
                                            <td>
                                                <span class="badge bg-<?php echo check_status_2($tsl['status'])?>"><?php echo $tsl['status']?></span>
                                            </td>
                                            <td>
                                                <a href="<?php echo $level ?>EditDataBase/edit/<?php echo restore_or_delete_link_tsl($tsl['status'])?>?id=<?php echo $tsl['id'] ?>"
                                                    style="margin:0 5px;"><?php echo restore_or_delete_btn_tsl($tsl['status'])?></a>
                                
                                                <a href="<?php echo $level ?>EditDataBase/FormEdit/F_edit_top_selling.php?id=<?php echo $tsl['id'] ?>"
                                                    style="margin:0 5px;"><i title="Edit" class="bi bi-pencil"></i></a>
                                            </td>
                                            
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                                <div class="btn-add d-flex flex-row-reverse">
                                <a href="<?php echo $level ?>EditDataBase/FormEdit/F__add_top_selling.php"
                                    class="">
                                    <button type="button" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i>
                                        Add </button>
                                </a>
                                </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>