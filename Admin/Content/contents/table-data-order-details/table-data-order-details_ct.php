<?php
    if(!isset($_SESSION['login']))
    {
        header("location:{$level}pages/page-login.php");
    }
  include_once "{$level}Database/tables/list_data_category.php";
  include_once "{$level}Database/tables/list_data_orders.php";
  include_once "{$level}Database/tables/list_data_order_details.php";
  include_once "{$level}Database/tables/list_data_size.php";
  include_once "{$level}Database/tables/list_data_product.php";

  $sql = "select category.name, product.title, orders.fullname, orders.email, orders.phone_number, orders.address, orders.order_date, order_details.id,order_details.order_id,order_details.price ,order_details.num, order_details.total_money, size.size from category inner join product on category.id = product.category_id inner join order_details on product.id = order_details.product_id inner join orders on order_details.order_id = orders.id inner join size on order_details.size_id = size.id";
  $data = $conn->query($sql);
  $detail = $data->fetchAll(PDO::FETCH_ASSOC);    

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
              <h5 class="card-title">Order Detail</h5>
            <?php                
                if(isset($_POST['btn']) or isset($_GET['id']))
                {                          
                    if(isset($_GET['id']))
                    {
                        $get_value = $_GET['id'];
                    } 
                    else
                    {
                        $get_value = $_POST['search'];
                    }  

                    if($get_value != '')
                    {                        
                        if(isset($_GET['id']))
                        {
                          $filter = $sql." where orders.id like '$get_value'";
                        }
                        else
                        {
                            $filter = $sql." where category.name like '%$get_value%' or product.title like '%$get_value%' or product.price like '%$get_value%' or orders.fullname like '%$get_value%' or orders.email like '%$get_value%' or orders.phone_number like '%$get_value%' or orders.address like '%$get_value%' or orders.order_date like '%$get_value%' or order_details.id like '%$get_value%' or order_details.num like '%$get_value%' or order_details.total_money like '%$get_value%' or size.size like '%$get_value%' ";
                        }
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
                                    <?php $list = array('ID','Order ID','Full name','Email','Phone number','Address','Title','Category','Size','Price','Amount','Total money','Order date');
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
                                    <td><?php echo $us['order_id'] ?></td>
                                    <td><?php echo $us['fullname'] ?></td>
                                    <td><?php echo $us['email'] ?></td>
                                    <td><?php echo $us['phone_number'] ?></td>
                                    <td><?php echo $us['address'] ?></td>
                                    <td><?php echo $us['title'] ?></td>
                                    <td><?php echo $us['name'] ?></td>
                                    <td><?php echo $us['size'] ?></td>
                                    <td>$<?php echo $us['price'] ?></td>
                                    <td><?php echo $us['num'] ?></td>
                                    <td><span class="badge bg-warning text-dark">$<?php echo $us['total_money'] ?></span></td>
                                    <td><?php echo $us['order_date'] ?></td>                                    
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
                                    <?php $list = array('ID','Order ID','Full name','Email','Phone number','Address','Title','Category','Size','Price','Amount','Total money','Order date');

                                    foreach($list as $ls)
                                    {
                                        echo '<th scope="col">'.$ls.'</th>';
                                    }
                                    ?>                  
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($detail as $us):
                                    ?>
                                    <tr>                      
                                    <td><?php echo $us['id'] ?></td>
                                    <td><?php echo $us['order_id'] ?></td>
                                    <td><?php echo $us['fullname'] ?></td>
                                    <td><?php echo $us['email'] ?></td>
                                    <td><?php echo $us['phone_number'] ?></td>
                                    <td><?php echo $us['address'] ?></td>
                                    <td><?php echo $us['title'] ?></td>
                                    <td><?php echo $us['name'] ?></td>
                                    <td><?php echo $us['size'] ?></td>
                                    <td>$<?php echo $us['price'] ?></td>
                                    <td><?php echo $us['num'] ?></td>
                                    <td><span class="badge bg-warning text-dark">$<?php echo $us['total_money'] ?></span></td>
                                    <td><?php echo $us['order_date'] ?></td>                                    
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