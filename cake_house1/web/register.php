<?php 
session_start();
require_once('../connection/connection.php'); 
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
                        <li>加入會員 / 會員登入</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>加入會員</h1>

                        <p class="lead">還不是會員嗎?</p>
                        <p>通過向我們註冊新的美食世界，享受超值折扣！ 整個過程不會花費您超過一分鐘！</p>
                        <p class="text-muted">如果有任何問題歡迎 <a href="contact.html">聯繫我們</a>，我們的客戶服務中心將為您全天候工作。</p>

                        <hr>

                        <form action="register_success.php" method="post">
                            <div class="form-group">
                                <label for="name">姓名</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">帳號(Email)</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">密碼</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <input type="hidden" name="url" value="<?php echo $_GET['url']; ?>">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> 註冊</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>會員登入</h1>

                        <p class="lead">已經加入會員?</p>
                        <p class="text-muted"></p>

                        <hr>

                        <form action="functions/check_user.php" method="post">
                            <div class="form-group">
                                <label for="email">帳號(Email)</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">密碼</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <input type="hidden" name="url" value="<?php echo $_GET['url']; ?>">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> 登入</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <?php require_once('template/footer.php'); ?>



</body>

</html>
