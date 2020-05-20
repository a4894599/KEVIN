<?php 
session_start();
require_once('../connection/connection.php'); ?>
<?php
    $limit = 5;
    if(isset($_GET['page'])){
      $page = $_GET['page'];
    }else{
      $page = 1;
    }

    $start_from = ($page-1) * $limit;
    $query = $db->query("SELECT * FROM products  WHERE product_categoryID = ". $_GET['categoryID']." ORDER BY 	product_categoryID  ASC");
    $all_products = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<?php
    
    $query2 = $db->query("SELECT * FROM product_category ORDER BY category DESC");
    $all_product_category = $query2->fetchAll(PDO::FETCH_ASSOC);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cake House 帶給你最天然健康的幸福滋味">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Cake House : 帶給你最天然健康的幸福滋味
    </title>

    <meta name="keywords" content="">

    <?php require_once('template/head_files.php'); ?>



</head>

<body>
<?php require_once('template/navbar.php'); ?>

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">首頁</a>
                        </li>
                        <li><a href="#">Ladies</a>
                        </li>
                        <li><a href="#">Tops</a>
                        </li>
                        <li>White Blouse Armani</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">產品分類</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                            <?php foreach($all_product_category as $category){ ?>
                                <li>
                                    <a href="product_list.php?categoryID=<?php echo $category['product_categoryID']; ?>"><?php echo $category['category']; ?> <span class="badge pull-right"></span></a>
                                    
                                </li>
                                <?php } ?> 

                            </ul>

                        </div>
                    </div>

                    
                    

                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="../images/ad-banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="row">
                        <div class="col-sm-12"> 
                               
                         <?php foreach($all_products as $products){ ?>
                        <div class="col-sm-3">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="product.php?productID=<?php echo $products['productID']; ?>">
                                                <img src="../uploads/products/wood-food-bread.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                                 <a href="product.php?productID=<?php echo $products['productID']; ?>">
                                                <img src="../uploads/products/wood-food-bread.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                               
                                <a href="product.php?productID=<?php echo $products['productID']; ?>" class="invisible">
                                    <img src="../uploads/products/wood-food-bread.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                <?php echo $products['name']; ?>
                                    <p class="price">$NT  <?php echo $products['price']; ?></p>
                                </div>
                                
                                <!-- /.text -->
                               
                                    <div class="ribbon new">
                                        <div class="theribbon">NEW</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                               
                                <!-- /.ribbon -->
                                    <div class="ribbon sale">
                                        <div class="theribbon">SALE</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                             
                               
                            </div>
                            <!-- /.product -->
                        </div>
                        <?php } ?> 
                        </div>
                    </div>

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


       <?php require_once('template/footer.php'); ?>





</body>

</html>