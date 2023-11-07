<?php
  include_once "{$level}Database/tables/list_data_tables_client.php";
  function check_status_el($check)
  {
    if($check == 'online') return 'success';
    else return 'danger';
  }

  function restore_or_delete_btn_rs($check){
    if($check == 'offline') return '<i title="Restore" class="bi bi-arrow-counterclockwise"></i>';
    else return '<i title="Delete" class="bi bi-trash"></i>';
  }
  function restore_or_delete_link_rs($check){
      if($check == 'offline') return 'E_restore_data_table_client.php';
      else return 'E_delete_data_table_client.php';
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
              <h5 class="card-title">Client</h5>
            
              <!-- Table with stripped rows -->
              <table class="table datatable ">
                <thead>
                  <tr>
                    <?php $list = array('Id','Name','Address','Phone','Start Date','Sales','Status','Edit');
                      foreach($list as $ls)
                      {
                        echo '<th scope="col">'.$ls.'</th>';
                      }
                    ?>                  
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($clients as $count => $el):
                    ?>
                    <tr>
                      <th scope="row"><?php echo $count+1?></th>
                      <td><?php echo $el['name'] ?></td>
                      <td><?php echo $el['address'] ?></td>
                      <td><?php echo $el['phone'] ?></td>
                      <td><?php echo $el['startdate'] ?></td>
                      <td><?php echo $el['sales'] ?></td>
                      <td><span class="badge bg-<?php echo check_status_el($el['status'])?>"><?php echo $el['status']?></span></td>
                      <td>
                          <a href="<?php echo $level ?>EditDataBase/edit/<?php echo restore_or_delete_link_rs($el['status']) ?>?id=<?php echo $el['id'] ?>"
                              style="margin:0 5px;"><?php echo restore_or_delete_btn_rs($el['status']) ?></a>
                          <a href="<?php echo $level ?>EditDataBase/FormEdit/F_edit_table_client.php?id=<?php echo $el['id'] ?>"
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