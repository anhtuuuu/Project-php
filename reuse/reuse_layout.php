<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <?php include_once("{$level}component/meta-data/meta.php")?>
    </head>
    <body>
            <!-- Add your site or application content here -->
            
            <!--pos page start-->
            <div class="pos_page">
                <div class="container">
                    <!--pos page inner-->
                    <div class="pos_page_inner">                      
                    
                       <!--header area -->
                        <?php include_once("{$level}component/header/header.php") ?>
                        <!--header end -->

        <!-- CONTENT START -->

                         <?php include_once("{$level}component/contents/content.php")?>

        <!-- CONTENT END -->
                        
                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->
            
            <!--footer area start-->
            <?php include_once("{$level}component/footer/footer.php") ?>
            <!--footer area end--> 
		
		<!-- all js here -->
        <?php include_once("{$level}component/javascript/main-js.php")?>
    </body>
</html>
