  <?php
    if(!isset($_SESSION['loginC']))
    {
        header("location:{$level}pages/login.php");
    }
  ?>
  <?php
    include_once "{$level}Database/tables/list_data_orders.php";
    $sql = "select * from orders where user_id = ".$_SESSION['loginC'][0]['id'];
    $data = $conn->query($sql);
    $list_order = $data->fetchAll(PDO::FETCH_ASSOC);

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
  ?>
  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="<?php echo $level?>index.php">home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>my account</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- Start Maincontent  -->
    <section class="main_content_area">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Dashboard</a></li>
                                <li> <a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>                    
                                <!-- <li><a href="#address" data-toggle="tab" class="nav-link">Addresses</a></li> -->
                                <li><a href="#account-details" data-toggle="tab" class="nav-link">Account details</a></li>
                                <li><a href="<?php echo $level?>pages/logout.php" class="nav-link">logout</a></li>
                            </ul>
                        </div>    
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h3>Dashboard </h3>
                                <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h3>Orders</h3>
                                <div class="coron_table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>	 	 	 	
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($list_order as $count=>$lo): ?>
                                            <tr>
                                                <td><?php echo  $count+1 ?></td>
                                                <td><?php echo $lo['order_date'] ?></td>
                                                <td><span class="badge bg-<?php echo bg_status($lo['status'])?> text-light"><?php echo check_status($lo['status'])?></span></td>                                                       
                                                <td>$<?php echo $lo['total_money'] ?></td>
                                                <td><a href="<?php echo $level?>Database/EditDatabase/E_cancel_order.php?id=<?php echo $lo['id'] ?>" class="view">Cancel</a></td>
                                            </tr>
                                            <?php endforeach; ?>                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <!-- <div class="tab-pane" id="address">
                                <p>The following addresses will be used on the checkout page by default.</p>
                                <h4 class="billing-address">Billing address</h4>
                                <a href="#" class="view">Edit</a>
                                <p><strong>Bobby Jackson</strong></p>
                                <address>
                                    House #15<br>
                                    Road #1<br>
                                    Block #C <br>
                                    Banasree <br>
                                    Dhaka <br>
                                    1212
                                </address>
                                <p>Bangladesh</p>   
                            </div> -->
                            <div class="tab-pane fade" id="account-details">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="<?php echo $level ?>Database/EditDatabase/E_change_user.php?id=<?php echo $_SESSION['loginC'][0]['id'] ?>" method="POST"> 
                                                
                                                <label>Full Name</label>
                                                <input type="text" name="fullname" value="<?php echo $_SESSION['loginC'][0]['fullname'] ?>">
                                                <label>Email</label>
                                                <input type="text" name="email" value="<?php echo $_SESSION['loginC'][0]['email'] ?>">
                                                <label>Password</label>
                                                <input type="text" name="password" value="<?php echo $_SESSION['loginC'][0]['password'] ?>">
                                                <label>Phone Number</label>
                                                <input type="text" name="phone_number" value="<?php echo $_SESSION['loginC'][0]['phone_number'] ?>">
                                                <label>Address</label>
                                                <input type="text" name="address" value="<?php echo $_SESSION['loginC'][0]['address'] ?>">
                                                <span class="example">
                                                    (E.g.: 05/31/1970)
                                                </span>
                                                <br>
                                                <span class="custom_checkbox">
                                                    <input type="checkbox" value="1" name="optin">
                                                    <label>Receive offers from our partners</label>
                                                </span>
                                                <br>
                                                <span class="custom_checkbox">
                                                    <input type="checkbox" value="1" name="newsletter">
                                                    <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                </span>
                                                <div class="save_button primary_btn default_button">                                                                        
                                                    <button type="submit" class="btn btn-dark" style="cursor: pointer;">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      	
    </section>			
    <!-- End Maincontent  --> 
<?php
    if(isset($_GET['note']) && $_GET['note'] == 1) echo "<script> alert('Saved change information !!!'); </script>";   
    if(isset($_GET['note']) && $_GET['note'] == 2) echo "<script> alert('Cancelled a order !!!'); </script>";                                            
?>