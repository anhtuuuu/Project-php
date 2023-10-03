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
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="<?php echo $level?>https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <?php $list = array('#','Name','Position','Age','Start Date');
                      foreach($list as $ls)
                      {
                        echo '<th scope="col">'.$ls.'</th>';
                      }
                    ?>                  
                  </tr>
                </thead>
                <tbody>
                  <?php $data = array(
                    array(
                      'name' => 'Brandon Jacob',
                      'position' => 'Designer',
                      'age' => '28',
                      'date' => '2016-05-25'
                    ),
                    array(
                      'name' => 'Bridie Kessler',
                      'position' => 'Developer',
                      'age' => '35',
                      'date' => '2014-12-05'
                    ),
                    array(
                      'name' => 'Ashleigh Langosh',
                      'position' => 'Finance',
                      'age' => '45',
                      'date' => '2011-08-12'
                    ),
                    array(
                      'name' => 'Angus Grady',
                      'position' => 'HR',
                      'age' => '34',
                      'date' => '2012-06-11'
                    ),
                    array(
                      'name' => 'Raheem Lehner',
                      'position' => 'Dynamic Division Officer',
                      'age' => '47',
                      'date' => '2011-04-19'
                    )
                    );
                    foreach($data as $count => $dt):
                    ?>
                    <tr>
                      <th scope="row"><?php echo $count+1?></th>
                      <td><?php echo $dt['name'] ?></td>
                      <td><?php echo $dt['position'] ?></td>
                      <td><?php echo $dt['age'] ?></td>
                      <td><?php echo $dt['date'] ?></td>
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