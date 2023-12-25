<?php
if(!isset($_SESSION['login']))
{
    header("location:{$level}pages/page-login.php");
}
  include_once "{$level}Database/tables/list_data_user.php";
  include_once "{$level}Database/tables/list_data_orders.php";

  $sql = "select orders.id,orders.fullname,orders.email,orders.phone_number,orders.address,orders.user_id,orders.note,orders.order_date,orders.status, orders.total_money from user inner join orders on orders.user_id = user.id ";
  $data = $conn->query($sql);
  $user_orders = $data->fetchAll(PDO::FETCH_ASSOC);    

  function bg_status($check)
  {
    if($check == 0) return 'danger';
    if($check == 1) return 'secondary';
    if($check == 2) return 'info';
    if($check == 3) return 'primary';
    if($check == 4) return 'success';
  }
  function check_status($check)
  {
    if($check == 0) return 'Cancelled';
    if($check == 1) return 'Waiting for acceptance';
    if($check == 2) return 'Waiting for pickup';
    if($check == 3) return 'Transporting';
    if($check == 4) return 'Successful';
  }
  function check_btn_accept($check)
  {
    if($check == 1) return '<i title="Accept" class="bi bi-check-circle-fill text-success"></i>';
    else return '';
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
            <div class="d-flex justify-content-between mt-2">
                <form class="search-form d-flex align-items-center" method="POST" action="#">
                    <input type="text" name="search" placeholder="Search" title="Enter search keyword">
                    <button type="submit" title="Search" name='btn'><i class="bi bi-search"></i></button>
                </form>

            </div>
              <h5 class="card-title">Orders</h5>
            <?php                
                if(isset($_POST['btn']))
                {       
                    $get_value = $_POST['search'];             
                    if($get_value != '')
                    {                        
                        $filter = $sql." where orders.id like '%$get_value%' or user.fullname like '%$get_value%' or user.email like '%$get_value%' or user.phone_number like '%$get_value%' or user.address like '%$get_value%' or note like '%$get_value%' or order_date like '%$get_value%'";
                        $data_search = $conn->query($filter);
                        $search = $data_search->fetchAll(PDO::FETCH_ASSOC); 
                        $count = count($search);
                        if($count > 0) 
                        {
                            ?>
                                <!-- Table with stripped rows -->
                            <table class="table datatable ">
                                <a href="<?php echo $level ?>pages/table-data-orders.php" class="text-light"><button type="button" class="btn btn-primary"><i class="bi bi-arrow-left"> Return</i></button></a>


                                <thead>
                                <tr>
                                    <?php $list = array('Order ID','Full name','Email','Phone number','Address','Note','Order date','Total money','Status','Edit','View');
                                    foreach($list as $ls)
                                    {
                                        echo '<th scope="col">'.$ls.'</th>';
                                    }
                                    ?>                  
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($search as $us):
                                    ?>
                                    <tr>                      
                                    <td><?php echo $us['id'] ?></td>
                                    <td><?php echo $us['fullname'] ?></td>
                                    <td><?php echo $us['email'] ?></td>
                                    <td><?php echo $us['phone_number'] ?></td>
                                    <td><?php echo $us['address'] ?></td>
                                    <td><?php echo $us['note'] ?></td>
                                    <td><?php echo $us['order_date'] ?></td>
                                    <td><span class="badge bg-warning text-dark">$<?php echo $us['total_money'] ?></span></td>
                                    <td><span class="badge bg-<?php echo bg_status($us['status'])?>"><?php echo check_status($us['status'])?></span></td>                                                       
                                    <td>
                                        <a href="<?php echo $level ?>EditDataBase/edit/E_accept_order.php?id=<?php echo $us['id'] ?>"
                                            style="margin:0 5px;"><?php echo check_btn_accept($us['status'])?></a>
                                       
                                    </td>
                                    <td><a href="<?php echo $level ?>pages/table-data-order-details.php?id=<?php echo $us['id'] ?>" class="text-primary" style="font-size: 12px;">Detail</a></td>

                                    </tr>
                                    <?php endforeach;?>    
                                </tbody>
                            </table>
              
                     <!-- End Table with stripped rows -->
                            <?php
                        }
                        else
                        {
                            ?>
                                <h4 class="card-title text-danger">Can't find the keyword you're looking for, try again.</h4>
                                <a href="<?php echo $level ?>pages/table-data-orders.php" class="text-light"><button type="button" class="btn btn-primary"><i class="bi bi-arrow-left"> Return</i></button></a>

                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <h4 class="card-title text-danger">Enter the keywords you need to find.</h4>
                                <a href="<?php echo $level ?>pages/table-data-orders.php" class="text-light"><button type="button" class="btn btn-primary"><i class="bi bi-arrow-left"> Return</i></button></a>

                        <?php
                    }
                }
                else
                {
                    ?>
                    <!-- Table with stripped rows -->
                    <table class="table datatable ">
                                <thead>
                                <tr>
                                    <?php $list = array('Order ID','Full name','Email','Phone number','Address','Note','Order date','Total money','Status','Edit','View');

                                    foreach($list as $ls)
                                    {
                                        echo '<th scope="col">'.$ls.'</th>';
                                    }
                                    ?>                  
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($user_orders as $us):
                                    ?>
                                    <tr>                      
                                    <td><?php echo $us['id'] ?></td>
                                    <td><?php echo $us['fullname'] ?></td>
                                    <td><?php echo $us['email'] ?></td>
                                    <td><?php echo $us['phone_number'] ?></td>
                                    <td><?php echo $us['address'] ?></td>
                                    <td><?php echo $us['note'] ?></td>
                                    <td><?php echo $us['order_date'] ?></td>
                                    <td><span class="badge bg-warning text-dark">$<?php echo $us['total_money'] ?></span></td>
                                    <td><span class="badge bg-<?php echo bg_status($us['status'])?>"><?php echo check_status($us['status'])?></span></td>                                                                           
                                    <td>
                                        <a href="<?php echo $level ?>EditDataBase/edit/E_accept_order.php?id=<?php echo $us['id'] ?>"
                                            style="margin:0 5px;"><?php echo check_btn_accept($us['status'])?></a>
                                        
                                    </td>
                                    <td><a href="<?php echo $level ?>pages/table-data-order-details.php?id=<?php echo $us['id'] ?>" class="text-primary" style="font-size: 12px;">Detail</a></td>

                                    </tr>
                                    <?php endforeach;?>    
                                </tbody>
                            </table>
              
                     <!-- End Table with stripped rows -->
                    <?php
                }
            ?>
              

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>