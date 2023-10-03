<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="<?php echo $level?>index.php">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>services</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->
<!--services img area-->
<div class="srrvices_gallery">
    <div class="row">
        <?php 
            $service = array(
                array(
                    'title' => 'DESIGN THE COVER',
                    'parg' => 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                    formas humanitatis per seacula quarta decima et quinta decima.'
                ),
                array(
                    'title' => 'DESIGN THE COVER',
                    'parg' => 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                    formas humanitatis per seacula quarta decima et quinta decima.'
                ),
                array(
                    'title' => 'DESIGN THE COVER',
                    'parg' => 'Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                    formas humanitatis per seacula quarta decima et quinta decima.'
                )
                );
            foreach($service as $count => $sv):
        ?>
        <div class="col-lg-4 col-md-6">
            <div class="single_services">
                <div class="services_thumb">
                    <img src="<?php echo $level?>assets\img\services\service<?php echo $count+1?>.jpg" alt="">
                </div>
                <div class="services_content">
                    <h3><?php echo $sv['title']?></h3>
                    <p><?php echo $sv['parg']?></p>

                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
<!--services img end-->

<!--our services area-->
<div class="our_services">
    <div class="row">
        <div class="col-12">
            <div class="services_title">
                <h2>OUR SERVICES</h2>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                    dolore<br>
                    eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit..</p>
            </div>
        </div>
    </div>
    <div class="row">
        <?php $our_sv = array(
            array(
                'item' => '<i class="fa fa-sliders" aria-hidden="true"></i>',
                'title' => 'BRANDING',
                'parg' => 'Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.'
            ),
            array(
                'item' => ' <i class="fa fa-umbrella"></i>',
                'title' => 'WEB DESIGN',
                'parg' => 'Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.'
            ),
            array(
                'item' => '<i class="fa fa-camera"></i>',
                'title' => 'PHOTOGRAPHY',
                'parg' => 'Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.'
            ),
            array(
                'item' => '<i class="fa fa-cog"></i>',
                'title' => 'WEB DEVELOPMENT',
                'parg' => 'Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.'
            ),
            array(
                'item' => '<i class="fa fa-file-code-o" aria-hidden="true"></i>',
                'title' => 'CODING',
                'parg' => 'Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.'
            ),
            array(
                'item' => '<i class="fa fa-bar-chart" aria-hidden="true"></i>',
                'title' => 'MARKETING',
                'parg' => 'Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.'
            ),
            array(
                'item' => ' <i class="fa fa-headphones"></i>',
                'title' => 'SUPPORT',
                'parg' => 'Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.'
            ),
            array(
                'item' => ' <i class="fa fa-leaf"></i>',
                'title' => 'GRAPHIC DESIGN',
                'parg' => 'Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.'
            )
            
            );
            foreach($our_sv as $os):
        ?>
        <div class="col-lg-3 col-md-6">
            <div class="services_item">
                <div class="services_icone">
                    <?php echo $os['item']?>
                </div>
                <div class="services_desc">
                    <h3><?php echo $os['title']?></h3>
                    <p><?php echo $os['parg']?></p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
<!--our services area end-->


<!--services section area-->
<div class="unlimited_services">
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
            <div class="services_section_thumb">
               <img src="<?php echo $level?>assets\img\services\service4.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="about_content">
                <h1>UNLIMITED IDEAS</h1>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                    dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit
                    praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum
                    soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim
                    assum. Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. </p>
                <div class="view__work">
                    <a href="#">MORE INFO <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--services section end-->

<!--price table area -->
<div class="priceing_table mb-35">
    <div class="row">
        <?php
            $price_table = array(
                array(
                    'title' => 'Standard',
                    'price' => '£19',
                    'list' => array('2 GB Webspace','1 Domain','PHP 5 Enbled','24H – Support'),
                    'class' => ''
                ),
                array(
                    'title' => 'Standard',
                    'price' => '£19',
                    'list' => array('2 GB Webspace','1 Domain','PHP 5 Enbled','24H – Support'),
                    'class' => 'class="list_button"'
                ),
                array(
                    'title' => 'Standard',
                    'price' => '£19',
                    'list' => array('2 GB Webspace','1 Domain','PHP 5 Enbled','24H – Support'),
                    'class' => ''
                ),
                array(
                    'title' => 'Standard',
                    'price' => '£19',
                    'list' => array('2 GB Webspace','1 Domain','PHP 5 Enbled','24H – Support'),
                    'class' => 'class="list_button"'
                ),
                
                );
                foreach($price_table as $pt):
        ?>
        <div class="col-lg-3 col-md-6">
            <div class="single_priceing">
                <div class="priceing_title">
                    <h1><?php echo $pt['title']?></h1>
                </div>
                <div class="priceing_list">
                    <h1><span><?php echo $pt['price']?></span>/Month</h1>
                    <ul>
                        <li><?php echo $pt['list'][0]?></li>
                        <li><?php echo $pt['list'][1]?></li>
                        <li><?php echo $pt['list'][2]?></li>
                        <li><?php echo $pt['list'][3]?></li>
                    </ul>
                    <a <?php echo $pt['class']?> href="#">purchase now </a>
                </div>
            </div>
        </div>
        <?php endforeach;?>

    </div>
</div>
<!--price table  end-->

<!--advantages wordpress -->
<div class="advantages_wordpress mb-35">
    <div class="row align-items-center">
        <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="advantages_content">
                <h3>Advantages of Mobilia WordPress theme</h3>
                <p>Build a professional website system and great user experience</p>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="advantages_button">
                <a href="#" title="MORE INFO ">MORE INFO <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!--advantages wordpress end-->

<!--brand logo strat-->
<div class="brand_logo brand_about">
    <div class="block_title">
        <h3>Brands</h3>
    </div>
    <div class="row">
        <div class="brand_active owl-carousel">
            <?php
                $brand_link = array('brand1','brand2','brand3','brand4','brand5','brand6');
                foreach($brand_link as $brl):
            ?>
            <div class="col-lg-2">
                <div class="single_brand">
                    <a href="#"><img src="<?php echo $level?>assets\img\brand\<?php echo $brl?>.jpg" alt=""></a>
                </div>
            </div>
            <?php endforeach;?>            
        </div>
    </div>
</div>
<!--brand logo end-->