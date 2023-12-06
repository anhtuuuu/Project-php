<?php

    if(!isset($_SESSION['loginC']))
    {
        header("location:{$level}pages/login.php");
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
                                            <li>about two</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->
                         <!--about section area -->
                        <div class="about_section section_two">
                            <div class="row align-items-center">
                                    
                                    <div class="col-12">
                                        <div class="about_content">
                                            <h1>WE CREATE <br>WORDPRESS THEMES</h1>
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. </p>
                                            <div class="view__work">
                                                <a href="#">view work </a>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="about_thumb">
                                           <img src="<?php echo $level?>assets\img\ship\about3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!--about section end-->


                        <!--counterup area -->
                        <div class="counterup_section">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="single_counterup">
                                           <div class="counter_img">
                                               <img src="<?php echo $level?>assets\img\cart\count.png" alt="">
                                            </div>
                                            <div class="counter_info">
                                                <h2 class="counter_number">2170</h2>
                                                <p>happy customers</p>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="single_counterup count-two">
                                            <div class="counter_img">
                                               <img src="<?php echo $level?>assets\img\cart\count2.png" alt="">
                                            </div>
                                            <div class="counter_info">
                                                <h2 class="counter_number">8080</h2>
                                                <p>AWARDS won</p>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="single_counterup">
                                            <div class="counter_img">
                                               <img src="<?php echo $level?>assets\img\cart\count3.png" alt="">
                                            </div>
                                            <div class="counter_info">
                                                <h2 class="counter_number">2150</h2>
                                                <p>HOURS WORKED</p>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="single_counterup count-two">
                                            <div class="counter_img">
                                               <img src="<?php echo $level?>assets\img\cart\cart5.png" alt="">
                                            </div>
                                            <div class="counter_info">
                                                <h2 class="counter_number">2170</h2>
                                                <p>COMPLETE PROJECTS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!--counterup end-->

                        <!--about progress bar -->
                        <div class="about_progressbar porgress_two">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="about__img">
                                       <img src="<?php echo $level?>assets\img\ship\about4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="progressbar_inner">
                                       <h2>We have Skills to show</h2>
                                        <div class="progress_skill">
                                            <div class="progress">
                                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".3s" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="progress_persent">HTML/CSS</span>    
                                                </div>
                                            </div>
                                            <span class="progress_discount">60%</span>
                                        </div>
                                        <div class="progress_skill">
                                            <div class="progress">
                                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".5s" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                                    <span class="progress_persent">WORDPRESS THEME </span>
                                                </div>

                                            </div>
                                             <span class="progress_discount">90%</span>
                                        </div> 
                                        <div class="progress_skill">
                                            <div class="progress">
                                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".7s" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                                    <span class="progress_persent">Typhography </span>
                                                </div>

                                            </div>
                                             <span class="progress_discount">70%</span>
                                        </div> 
                                         <div class="progress_skill">
                                            <div class="progress">
                                                <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".7s" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                                    <span class="progress_persent">Branding  </span>
                                                </div>

                                            </div>
                                             <span class="progress_discount">80%</span>
                                        </div> 
                                    </div>           
                                </div>
                                
                            </div>
                        </div>
                        <!--about progress bar end -->
                        
                        <!--brand logo strat--> 
                        <div class="brand_logo brand_about">
                            <div class="block_title">
                                <h3>Brands</h3>
                            </div>
                            <div class="row">
                                <div class="brand_active owl-carousel">
                                    <div class="col-lg-2">
                                        <div class="single_brand">
                                            <a href="#"><img src="<?php echo $level?>assets\img\brand\brand1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="single_brand">
                                            <a href="#"><img src="<?php echo $level?>assets\img\brand\brand2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="single_brand">
                                            <a href="#"><img src="<?php echo $level?>assets\img\brand\brand3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="single_brand">
                                            <a href="#"><img src="<?php echo $level?>assets\img\brand\brand4.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="single_brand">
                                            <a href="#"><img src="<?php echo $level?>assets\img\brand\brand5.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="single_brand">
                                            <a href="#"><img src="<?php echo $level?>assets\img\brand\brand6.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>       
                        <!--brand logo end-->   