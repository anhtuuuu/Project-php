<?php
  include_once "{$level}Database/tables/list_data_user.php";
  include_once "{$level}Database/tables/list_data_role.php";
  $sql = "select user.id,fullname,email,phone_number,address,password,role.name,created_at,updated_at,deleted from user inner join role on user.role_id = role.id";
  $data = $conn->query($sql);
  $user_role = $data->fetchAll(PDO::FETCH_ASSOC);    

  function restore_or_delete_btn($check){
    if($check == '0') return '<i title="Restore" class="bi bi-arrow-counterclockwise"></i>';
    else return '<i title="Delete" class="bi bi-trash"></i>';
  }
  function restore_or_delete_link($check){
      if($check == '0') return 'E_restore_data_user.php';
      else return 'E_delete_data_user.php';
  }
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
                <a href="<?php echo $level?>EditDataBase/FormEdit/F_add_admin.php" class="text-light"><button type="button" class="btn btn-primary"><i class="bi bi-plus-circle-dotted"></i>  New Account Admin</button></a>

            </div>
              <h5 class="card-title">User Information</h5>
            <?php                
                if(isset($_POST['btn']))
                {       
                    $get_value = $_POST['search'];             
                    if($get_value != '')
                    {                        
                        $filter = $sql." where user.id like '%$get_value%' or fullname like '%$get_value%' or email like '%$get_value%' or phone_number like '%$get_value%' or address like '%$get_value%' or password like '%$get_value%' or role.name like '%$get_value%' or created_at like '%$get_value%' or updated_at like '%$get_value%'";
                        $data_search = $conn->query($filter);
                        $search = $data_search->fetchAll(PDO::FETCH_ASSOC); 
                        $count = count($search);
                        if($count > 0) 
                        {
                            ?>
                                <!-- Table with stripped rows -->
                            <table class="table datatable ">
                                <a href="<?php echo $level ?>pages/table-data-user.php" class="text-light"><button type="button" class="btn btn-primary"><i class="bi bi-arrow-left"> Return</i></button></a>


                                <thead>
                                <tr>
                                    <?php $list = array('User ID','Full name','Email','Phone number','Address','Password','Role','Created at','Updated at','Deleted','Edit');
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
                                    <td class="text-capitalize"><?php echo $us['fullname'] ?></td>
                                    <td><?php echo $us['email'] ?></td>
                                    <td><?php echo $us['phone_number'] ?></td>
                                    <td><?php echo $us['address'] ?></td>
                                    <td><?php echo $us['password'] ?></td>
                                    <td><?php echo $us['name'] ?></td>
                                    <td><?php echo $us['created_at'] ?></td>
                                    <td><?php echo $us['updated_at'] ?></td>
                                    <td><?php echo print_deleted($us['deleted']) ?></td>                      
                                    <td>
                                        <a href="<?php echo $level ?>EditDataBase/edit/<?php echo restore_or_delete_link($us['deleted']) ?>?id=<?php echo $us['id'] ?>"
                                            style="margin:0 5px;"><?php echo restore_or_delete_btn($us['deleted']) ?></a>
                                        <a href="<?php echo $level ?>EditDataBase/FormEdit/F_edit_user.php?id=<?php echo $us['id'] ?>"
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
                                <a href="<?php echo $level ?>pages/table-data-user.php" class="text-light"><button type="button" class="btn btn-primary"><i class="bi bi-arrow-left"> Return</i></button></a>

                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <h4 class="card-title text-danger">Enter the keywords you need to find.</h4>
                                <a href="<?php echo $level ?>pages/table-data-user.php" class="text-light"><button type="button" class="btn btn-primary"><i class="bi bi-arrow-left"> Return</i></button></a>

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
                                    <?php $list = array('User ID','Full name','Email','Phone number','Address','Password','Role','Created at','Updated at','Deleted','Edit');
                                    foreach($list as $ls)
                                    {
                                        echo '<th scope="col">'.$ls.'</th>';
                                    }
                                    ?>                  
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($user_role as $us):
                                    ?>
                                    <tr>                      
                                    <td><?php echo $us['id'] ?></td>
                                    <td><?php echo $us['fullname'] ?></td>
                                    <td><?php echo $us['email'] ?></td>
                                    <td><?php echo $us['phone_number'] ?></td>
                                    <td><?php echo $us['address'] ?></td>
                                    <td><?php echo $us['password'] ?></td>
                                    <td><?php echo $us['name'] ?></td>
                                    <td><?php echo $us['created_at'] ?></td>
                                    <td><?php echo $us['updated_at'] ?></td>
                                    <td><?php echo print_deleted($us['deleted']) ?></td>                      
                                    <td>
                                        <a href="<?php echo $level ?>EditDataBase/edit/<?php echo restore_or_delete_link($us['deleted']) ?>?id=<?php echo $us['id'] ?>"
                                            style="margin:0 5px;"><?php echo restore_or_delete_btn($us['deleted']) ?></a>
                                        <a href="<?php echo $level ?>EditDataBase/FormEdit/F_edit_user.php?id=<?php echo $us['id'] ?>"
                                            style="margin:0 5px;"><i title="Edit" class="bi bi-pencil"></i></a>
                                    </td>
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