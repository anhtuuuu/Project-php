
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