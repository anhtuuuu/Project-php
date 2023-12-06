<?php
    if(!isset($_SESSION['loginC']))
    {
        header("location:{$level}pages/login.php");
    }
  ?>
 <!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="<?php echo $level?>index.php">home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>portfolio</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--portfolio section -->
<div class="portfolio_section_area">
    <div class="portfolio_button">
        <div class="row">
            <div class="col-12">

                <button class="active" data-filter="*">all</button>
                <?php $button = array(
                    array(
                        'data' => '.company',
                        'title' => 'Company'
                    ),
                    array(
                        'data' => '.computers',
                        'title' => 'Computers'
                    ),
                    array(
                        'data' => '.general',
                        'title' => 'General'
                    ),
                    array(
                        'data' => '.hipster',
                        'title' => 'Hipster'
                    ),
                    array(
                        'data' => '.food',
                        'title' => 'Just Food'
                    ),                    
                );
                foreach($button as $btn):
                ?>
                <button data-filter="<?php echo $btn['data']?>"><?php echo $btn['title']?></button>
                <?php endforeach;?>

            </div>
        </div>
    </div>
    
    <div class="row portfolio_gallery">
        <?php 
            $gallery = array(
            'computers general',
            'computers food',
            'company general',
            'computers hipster',
            'computers general food',
            'company general hipster',
            'computers company food',
            'computers general Hipster',
            'company general hipster food',
            'computers company hipster food',
            'computers company general food',
            'computers company general hipster'
            );
            foreach($gallery as $count => $gal):
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6 gird_item <?php echo $gal?>">
            <div class="single_portfolio_inner">
                <div class="portfolio_thumb">
                    <a href="#"><img src="<?php echo $level?>assets\img\portfolio\port<?php echo $count+1?>.jpg" alt=""></a>
                    <div class="portfolio_popup">
<<<<<<< HEAD
<<<<<<< HEAD
                        <a class="port_popup" href="<?php echo $level?>assets\img\portfolio\port1.jpg"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <div class="portfolio_link">
                        <a href="<?php echo $level?>portfolio-details.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="portfolio__content">
                    <a href="<?php echo $level?>portfolio-details.php">Coffee & Cookie Time</a>
                    <span>admin</span>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers food">
            <div class="single_portfolio_inner">
                <div class="portfolio_thumb">
                    <a href="#"><img src="<?php echo $level?>assets\img\portfolio\port2.jpg" alt=""></a>
                    <div class="portfolio_popup">
                        <a class="port_popup" href="<?php echo $level?>assets\img\portfolio\port2.jpg"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <div class="portfolio_link">
                        <a href="<?php echo $level?>portfolio-details.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="portfolio__content">
                    <a href="<?php echo $level?>portfolio-details.php">Coffee & Cookie Time</a>
                    <span>admin</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 gird_item company general">
            <div class="single_portfolio_inner">
                <div class="portfolio_thumb">
                    <a href="#"><img src="<?php echo $level?>assets\img\portfolio\port3.jpg" alt=""></a>
                    <div class="portfolio_popup">
                        <a class="port_popup" href="<?php echo $level?>assets\img\portfolio\port3.jpg"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <div class="portfolio_link">
                        <a href="<?php echo $level?>portfolio-details.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="portfolio__content">
                    <a href="#">Coffee & Cookie Time</a>
                    <span>admin</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers hipster">
            <div class="single_portfolio_inner">
                <div class="portfolio_thumb">
                    <a href="#"><img src="<?php echo $level?>assets\img\portfolio\port4.jpg" alt=""></a>
                    <div class="portfolio_popup">
                        <a class="port_popup" href="<?php echo $level?>assets\img\portfolio\port4.jpg"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <div class="portfolio_link">
                        <a href="<?php echo $level?>portfolio-details.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="portfolio__content">
                    <a href="<?php echo $level?>portfolio-details.php">Coffee & Cookie Time</a>
                    <span>admin</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers general food">
            <div class="single_portfolio_inner">
                <div class="portfolio_thumb">
                    <a href="#"><img src="<?php echo $level?>assets\img\portfolio\port5.jpg" alt=""></a>
                    <div class="portfolio_popup">
                        <a class="port_popup" href="<?php echo $level?>assets\img\portfolio\port5.jpg"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <div class="portfolio_link">
                        <a href="<?php echo $level?>portfolio-details.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="portfolio__content">
                    <a href="<?php echo $level?>portfolio-details.php">Coffee & Cookie Time</a>
                    <span>admin</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 gird_item company general hipster">
            <div class="single_portfolio_inner">
                <div class="portfolio_thumb">
                    <a href="#"><img src="<?php echo $level?>assets\img\portfolio\port6.jpg" alt=""></a>
                    <div class="portfolio_popup">
                        <a class="port_popup" href="<?php echo $level?>assets\img\portfolio\port6.jpg"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <div class="portfolio_link">
                        <a href="<?php echo $level?>portfolio-details.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="portfolio__content">
                    <a href="<?php echo $level?>portfolio-details.php">Coffee & Cookie Time</a>
                    <span>admin</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers company food">
            <div class="single_portfolio_inner">
                <div class="portfolio_thumb">
                    <a href="#"><img src="<?php echo $level?>assets\img\portfolio\port7.jpg" alt=""></a>
                    <div class="portfolio_popup">
                        <a class="port_popup" href="<?php echo $level?>assets\img\portfolio\port7.jpg"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <div class="portfolio_link">
                        <a href="<?php echo $level?>portfolio-details.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="portfolio__content">
                    <a href="<?php echo $level?>portfolio-details.php">Coffee & Cookie Time</a>
                    <span>admin</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers general Hipster">
            <div class="single_portfolio_inner">
                <div class="portfolio_thumb">
                    <a href="#"><img src="<?php echo $level?>assets\img\portfolio\port8.jpg" alt=""></a>
                    <div class="portfolio_popup">
                        <a class="port_popup" href="<?php echo $level?>assets\img\portfolio\port9.jpg"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <div class="portfolio_link">
                        <a href="<?php echo $level?>portfolio-details.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="portfolio__content">
                    <a href="<?php echo $level?>portfolio-details.php">Coffee & Cookie Time</a>
                    <span>admin</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 gird_item company general hipster food">
            <div class="single_portfolio_inner">
                <div class="portfolio_thumb">
                    <a href="#"><img src="<?php echo $level?>assets\img\portfolio\port9.jpg" alt=""></a>
                    <div class="portfolio_popup">
                        <a class="port_popup" href="<?php echo $level?>assets\img\portfolio\port9.jpg"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <div class="portfolio_link">
                        <a href="<?php echo $level?>portfolio-details.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="portfolio__content">
                    <a href="<?php echo $level?>portfolio-details.php">Coffee & Cookie Time</a>
                    <span>admin</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers company hipster food">
            <div class="single_portfolio_inner">
                <div class="portfolio_thumb">
                    <a href="#"><img src="<?php echo $level?>assets\img\portfolio\port10.jpg" alt=""></a>
                    <div class="portfolio_popup">
                        <a class="port_popup" href="<?php echo $level?>assets\img\portfolio\port10.jpg"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <div class="portfolio_link">
                        <a href="<?php echo $level?>portfolio-details.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="portfolio__content">
                    <a href="<?php echo $level?>portfolio-details.php">Coffee & Cookie Time</a>
                    <span>admin</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers company general food">
            <div class="single_portfolio_inner">
                <div class="portfolio_thumb">
                    <a href="#"><img src="<?php echo $level?>assets\img\portfolio\port11.jpg" alt=""></a>
                    <div class="portfolio_popup">
                        <a class="port_popup" href="<?php echo $level?>assets\img\portfolio\port11.jpg"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <div class="portfolio_link">
                        <a href="<?php echo $level?>portfolio-details.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="portfolio__content">
                    <a href="<?php echo $level?>portfolio-details.php">Coffee & Cookie Time</a>
                    <span>admin</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 gird_item computers company general hipster">
            <div class="single_portfolio_inner">
                <div class="portfolio_thumb">
                    <a href="#"><img src="<?php echo $level?>assets\img\portfolio\port12.jpg" alt=""></a>
                    <div class="portfolio_popup">
                        <a class="port_popup" href="<?php echo $level?>assets\img\portfolio\port12.jpg"><i
=======
=======
>>>>>>> b380f7afc893c0ceae3a966ad92011b23a0b5ac9
                        <a class="port_popup" href="<?php echo $level?>assets\img\portfolio\port<?php echo $count+1?>.jpg"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <div class="portfolio_link">
                        <a href="portfolio-details.php"><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="portfolio__content">
                    <a href="portfolio-details.php">Coffee & Cookie Time</a>
                    <span>admin</span>
                </div>
            </div>
        </div>
        <?php endforeach;?>
        
    </div>
</div>
<!--portfolio section end-->