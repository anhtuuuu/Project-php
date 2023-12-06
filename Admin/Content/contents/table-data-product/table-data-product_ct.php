<?php
if(!isset($_SESSION['login']))
{
    header("location:{$level}pages/page-login.php");
}
  include_once "{$level}Database/tables/list_data_product.php";
  include_once "{$level}Database/tables/list_data_category.php";
  $sql = "select product.id,category_id,title,price,discount,quantity,thumbnail,description,created_at,updated_at,deleted,category.name from product inner join category on product.category_id = category.id";
  $data = $conn->query($sql);
  $product_category = $data->fetchAll(PDO::FETCH_ASSOC);    

  function restore_or_delete_btn($check){
    if($check == '0') return '<i title="Restore" class="bi bi-arrow-counterclockwise"></i>';
    else return '<i title="Delete" class="bi bi-trash"></i>';
  }
  function restore_or_delete_link($check){
      if($check == '0') return 'E_restore_data_product.php';
      else return 'E_delete_data_product.php';
  }
//   function print_category($check)
//   {
//     foreach($category as $ctgr)
//     {
//         if($check == $ctgr['id']) return $ctgr['name'];
//     }    
//   }
  function print_deleted($check)
  {
    if($check == 1) return '';
    else return '<i class="bi bi-x-lg" style="color:red;"></i>' ;
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
                <a href="<?php echo $level?>EditDataBase/FormEdit/F_add_product.php" class="text-light"><button type="button" class="btn btn-primary"><i class="bi bi-plus-circle-dotted"></i>  New Product</button></a>
            </div>
              <h5 class="card-title">Product</h5>
            <?php                
                if(isset($_POST['btn']))
                {       
                    $get_value = $_POST['search'];             
                    if($get_value != '')
                    {                   
                        $filter = $sql." where product.id like '%$get_value%' or category_id like '%$get_value%' or title like '%$get_value%' or price like '%$get_value%' or quantity like '%$get_value%' or description like '%$get_value%' or category.name like '%$get_value%' or created_at like '%$get_value%' or updated_at like '%$get_value%'";
                        $data_search = $conn->query($filter);
                        $search = $data_search->fetchAll(PDO::FETCH_ASSOC); 
                        $count = count($search);
                        if($count > 0) 
                        {
                            ?>
                                <!-- Table with stripped rows -->
                            <table class="table datatable ">
                                <a href="<?php echo $level ?>pages/table-data-product.php" class="text-light"><button type="button" class="btn btn-primary"><i class="bi bi-arrow-left"> Return</i></button></a>


                                <thead>
                                <tr>
                                    <?php $list = array('Product ID','Category','Title','Price','Discount','Quantity','Thumbnail','Description','Created at','Updated at','Deleted','Edit');
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
                                    <!-- select product.id, category_id, title, price, quantity, thumbnail, description, created_at, updated_at, deleted, category.name             -->
                                    <td><?php echo $us['id'] ?></td>
                                    <td><?php echo $us['name'] ?></td>
                                    <td><?php echo $us['title'] ?></td>
                                    <td>$<?php echo $us['price'] ?></td>
                                    <td>$<?php echo $us['discount'] ?></td>
                                    <td><?php echo $us['quantity'] ?></td>
                                    <td><img src="<?php echo $level ?>../uploads/<?php echo $us['thumbnail'] ?>" alt="" class="img-thumbnail"></td>
                                    <td><?php echo $us['description'] ?></td>
                                    <td><?php echo $us['created_at'] ?></td>
                                    <td><?php echo $us['updated_at'] ?></td>
                                    <td><?php echo print_deleted($us['deleted']) ?></td>                      
                                    <td>
                                        <a href="<?php echo $level ?>EditDataBase/edit/<?php echo restore_or_delete_link($us['deleted']) ?>?id=<?php echo $us['id'] ?>"
                                            style="margin:0 5px;"><?php echo restore_or_delete_btn($us['deleted']) ?></a>
                                        <a href="<?php echo $level ?>EditDataBase/FormEdit/F_edit_product.php?id=<?php echo $us['id'] ?>"
                                            style="margin:0 5px;"><i title="Edit" class="bi bi-pencil"></i></a>
                                    </td>
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
                                <a href="<?php echo $level ?>pages/table-data-product.php" class="text-light"><button type="button" class="btn btn-primary"><i class="bi bi-arrow-left"> Return</i></button></a>

                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <h4 class="card-title text-danger">Enter the keywords you need to find.</h4>
                                <a href="<?php echo $level ?>pages/table-data-product.php" class="text-light"><button type="button" class="btn btn-primary"><i class="bi bi-arrow-left"> Return</i></button></a>

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
                                <?php $list = array('Product ID','Category','Title','Price','Discount','Quantity','Thumbnail','Description','Created at','Updated at','Deleted','Edit');
                                    foreach($list as $ls)
                                    {
                                        echo '<th scope="col">'.$ls.'</th>';
                                    }
                                    ?>                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($product_category as $us):
                                    ?>
                                    <tr>  
                                    <td><?php echo $us['id'] ?></td>
                                    <td><?php echo $us['name'] ?></td>
                                    <td><?php echo $us['title'] ?></td>
                                    <td>$<?php echo $us['price'] ?></td>
                                    <td>$<?php echo $us['discount'] ?></td>
                                    <td><?php echo $us['quantity'] ?></td>
                                    <td><img src="<?php echo $level ?>../uploads/<?php echo $us['thumbnail'] ?>" alt="" class="img-thumbnail"></td>
                                    <td><?php echo $us['description'] ?></td>
                                    <td><?php echo $us['created_at'] ?></td>
                                    <td><?php echo $us['updated_at'] ?></td>
                                    <td><?php echo print_deleted($us['deleted']) ?></td>                      
                                    <td>
                                        <a href="<?php echo $level ?>EditDataBase/edit/<?php echo restore_or_delete_link($us['deleted']) ?>?id=<?php echo $us['id'] ?>"
                                            style="margin:0 5px;"><?php echo restore_or_delete_btn($us['deleted']) ?></a>
                                        <a href="<?php echo $level ?>EditDataBase/FormEdit/F_edit_product.php?id=<?php echo $us['id'] ?>"
                                            style="margin:0 5px;"><i title="Edit" class="bi bi-pencil"></i></a>
                                    </td>
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