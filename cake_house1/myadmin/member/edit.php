<?php require_once('../../connection/connection.php'); ?>
<?php
if(isset($_POST['EditForm']) && $_POST['EditForm'] == "EDIT"){
  $sql= "UPDATE member SET name =:name, phone = :phone, email = :email, address=:address where memberID = :memberID";
  $sth = $db ->prepare($sql);
  $sth ->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
  $sth ->bindParam(":phone", $_POST['phone'], PDO::PARAM_STR);
  $sth ->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
  $sth ->bindParam(":address", $_POST['address'], PDO::PARAM_STR);
  $sth ->bindParam(":memberID", $_POST['memberID'], PDO::PARAM_STR);
  $sth ->execute();

  header('Location: list.php');
}  else{
    $query = $db->query("SELECT * FROM member WHERE memberID=".$_GET['gmemberID']);
    $member = $query->fetch(PDO::FETCH_ASSOC);
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
              <form id="EditForm" class="text-right" method="post" action="edit.php">
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">姓名</label>
                  <div class="col-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $member['name'];?>"> </div>
                </div>
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">電話</label>
                  <div class="col-10">
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $member['phone'];?>"> </div>
                </div>
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">信箱</label>
                  <div class="col-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $member['email'];?>"> </div>
                </div>
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">地址</label>
                  <div class="col-10">
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $member['address'];?>"> </div>
                </div>
                    <input type="hidden" name="EditForm" value="EDIT">
                    <input type="hidden" name="memberID" value="<?php echo $_GET['gmemberID']?>">
                    <button type="submit" class="btn mr-3 btn-primary">取消並回上一頁</button><button type="submit" class="btn btn-secondary">確定送出</button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once('../layouts/footer.php');  ?>

</body>

</html>