
<?php 
session_start();
require_once('../connection/connection.php'); 
$_SESSION['Receiver']['shipping'] = $_POST['delivery'];
$_SESSION['Receiver']['receive_method'] = $_POST['delivery_name'];
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
                        <li>結帳 - Payment method</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="checkout4.php">
                            <h1>結帳 - Payment method</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="checkout1.php"><i class="fa fa-map-marker"></i><br>填寫收件者資料</a>
                                </li>
                                <li><a href="checkout2.php"><i class="fa fa-truck"></i><br>選擇取貨方式</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-money"></i><br>選擇付款方式</a>
                                </li>
                                <li class="disabled"><a href="checkout4.php"><i class="fa fa-eye"></i><br>訂單確認</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box payment-method">

                                            <h4>信用卡付款</h4>

                                            <p>只限VISA 或 Mastercard</p>

                                            <div class="box-footer text-center">
                                               
                                                <input type="radio" name="pay1" value="0" checked>
                                                <input type="hidden" name="payment" id="pay1" value="信用卡付款">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box payment-method">

                                            <h4>ATM轉帳</h4>

                                            <p>付款後請於訂單備註回覆帳號後5碼以利對帳</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="pay1" value="1">
                                               
                                             
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.content -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="checkout2.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>上一步</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">繼續<i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">

                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th>$446.00</th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <th>$10.00</th>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th>$0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>$456.00</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


       <?php require_once('template/footer.php'); ?>

<script>


$(function(){
        

        $('input[name="pay1"]').change(function(){
            var payvalue = $(this).val();

            if (payvalue == 0)
            $('input[name="payment"]').val("信用卡付款");
            else if (payvalue == 1)
            $('input[name="payment"]').val("ATM轉帳");

         
        });
});
</script>

</body>

</html>