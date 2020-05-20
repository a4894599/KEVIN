<?php require_once('../functions/login_check.php'); ?>
<?php require_once('../../connection/connection.php'); ?>
<?php
if(isset($_POST['AddForm']) && $_POST['AddForm'] == "INSERT"){
  $sql= "INSERT INTO category  (category, created_at) VALUES (:category, :created_at)";
  $sth = $db ->prepare($sql);
 
  $sth ->bindParam(":category", $_POST['category'], PDO::PARAM_STR);
  $sth ->bindParam(":created_at", $_POST['created_at'], PDO::PARAM_STR);
  $sth ->execute();
  header('Location: list.php');
}

?>
<!DOCTYPE html>
<html>

<?php require_once('../layouts/head.php'); ?>

<body style="">
<?php require_once('../layouts/navbar.php'); ?>
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h1>最新消息管理</h1>
            </div>
            <div class="card-body">
              <ul class="breadcrumb mb-2">
                <li class="breadcrumb-item"> <a href="#">首頁</a> </li>
                <li class="breadcrumb-item"><a href="#">最新消息管理</a></li>
                <li class="breadcrumb-item active">新增一筆</li>
              </ul>
              <div class="row">
                <div class="col-md-12 my-3"><a class="btn btn-primary" href="list.php">回上一頁</a></div>
              </div>
              <form id="AddForm" class="text-right" method="post" action="create.php" enctype ="multipart/form-data">

                <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label" contenteditable="true">分類</label>
                    <div class="col-10">
                      <input type="text" class="form-control" id="category" name="category"> </div>
                  </div>
      
                <button type="submit" class="btn mr-3 btn-primary">取消並回上一頁</button><button type="submit" class="btn btn-secondary">確定送出</button>
                <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label"></label>
                  <div class="col-10">

                    <input type="hidden" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
                    <input type="hidden" name="AddForm" value="INSERT">
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once('../layouts/footer.php');  ?>

</body>

</html>