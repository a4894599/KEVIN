<?php 
session_start();
require('../connection/connection.php');
$query = $db->query("SELECT * FROM news WHERE news_id =".$_GET['id']);
$news = $query->fetch(PDO::FETCH_ASSOC);
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

                <div class="col-sm-12">

                    <ul class="breadcrumb">

                        <li><a href="../index.php">首頁</a>
                        </li>
                        <li><a href="news_list.php">最新消息</a>
                        </li>
                        <li>最新消息標題</li>
                    </ul>
                </div>

                <div class="col-sm-9" id="blog-post">


                    <div class="box">

                        <h1>最新消息標題</h1>
                        <p class="author-date"><i class="fa fa-calendar-o"></i>  發佈日期</p>
                       

                        <div id="post-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id felis vel nisi consectetur suscipit sit amet quis neque. Nulla nisl tellus, rhoncus a accumsan nec, vulputate quis dolor. Duis dictum malesuada lobortis. Cras elementum quam congue, elementum justo vel, sodales nisl. Nulla nunc mauris, ultrices sit amet mauris a, pulvinar suscipit ipsum. Morbi quam lorem, viverra vitae tempus in, ullamcorper nec sem. Nulla facilisi. Vestibulum suscipit cursus facilisis. Nulla facilisi. Suspendisse pretium ex at aliquam cursus. Quisque id hendrerit leo. Mauris vel lorem metus.

Nam bibendum nunc at risus lacinia euismod. Ut ultrices, tellus non dignissim scelerisque, tellus nulla rutrum nisl, ultricies interdum ipsum lectus vitae turpis. Donec faucibus elit vitae turpis placerat accumsan. Donec nec tincidunt nibh. Sed sed lorem vel nisl sagittis semper mattis at massa. Pellentesque ut scelerisque nisl. Etiam sodales lacus ac risus consectetur cursus in eu magna. Cras ac risus faucibus, mollis ipsum sit amet, imperdiet augue. Etiam rutrum iaculis sem vel vulputate. Duis elementum velit eu nibh ultricies, id auctor mauris vulputate.

Aliquam eu convallis ante. Duis scelerisque nulla felis, a pellentesque quam malesuada ut. Aliquam interdum urna ac neque vulputate, id accumsan diam euismod. Mauris sit amet elit nec mauris bibendum consequat sit amet eu risus. Integer ac urna posuere, efficitur ipsum ac, dapibus dui. Phasellus tempus, est in vestibulum accumsan, sem massa facilisis sem, sed hendrerit tellus nibh sed sapien. Duis tincidunt felis a erat gravida condimentum. Nunc vel euismod dui. Etiam non venenatis velit, a facilisis orci. Nullam dui sapien, aliquet a scelerisque ac, elementum sed turpis.
                        </div>
                        <!-- /#post-content -->


                    </div>
                    <!-- /.box -->
                </div>
                <!-- /#blog-post -->

                <div class="col-md-3">
                    <!-- *** BLOG MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">最新優惠</h3>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** BLOG MENU END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="../images/ad-banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

        <?php require_once('template/footer.php'); ?>







</body>

</html>