<?php $level = "../"?>
<?php $level='../' ?> <!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <?php include_once("{$level}layout/meta-data/meta.php")?>
    </head>
    <body>
            <!-- Add your site or application content here -->
            
            <!--pos page start-->
            <div class="pos_page">
                <div class="container">
                    <!--pos page inner-->
                    <div class="pos_page_inner">                      
                    
                       <!--header area -->
                        <?php include_once("{$level}layout/header/header.php") ?>
                        <!--header end -->

        <!-- CONTENT START -->

                         <!--breadcrumbs area start-->
                         <?php include_once("{$level}layout/contents/portfolio/breadcrumbs.php") ?>                        
                        <!--breadcrumbs area end-->

                        <!--portfolio section -->
                        <?php include_once("{$level}layout/contents/portfolio/section.php") ?>                        
                        <!--portfolio section end-->

        <!-- CONTENT END -->
                        
                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->
            
            <!--footer area start-->
            <?php include_once("{$level}layout/footer/footer.php") ?>
            <!--footer area end--> 
		
		<!-- all js here -->
        <?php include_once("{$level}layout/javascript/main-js.php")?>
    </body>
</html>
