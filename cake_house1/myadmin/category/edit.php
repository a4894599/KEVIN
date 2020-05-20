<?php require_once('../functions/login_check.php'); ?>
<?php require_once('../../connection/connection.php'); ?>
<?php
if(isset($_POST['EditForm']) && $_POST['EditForm'] == "EDIT"){
  $sql= "UPDATE news SET published_date =:published_date, title = :title, description = :description, updated_at=:updated_at where news_id = :news_id";
  $sth = $db ->prepare($sql);
  $sth ->bindParam(":published_date", $_POST['published_date'], PDO::PARAM_STR);
  $sth ->bindParam(":title", $_POST['title'], PDO::PARAM_STR);
  $sth ->bindParam(":description", $_POST['description'], PDO::PARAM_STR);
  $sth ->bindParam(":updated_at", $_POST['updated_at'], PDO::PARAM_STR);
  $sth ->bindParam(":news_id", $_POST['news_id'], PDO::PARAM_STR);
  $sth ->execute();

  header('Location: list.php');
}  else{
    $query = $db->query("SELECT * FROM news WHERE news_id=".$_GET['gnewsID']);
    $news = $query->fetch(PDO::FETCH_ASSOC);
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
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">發佈日期</label>
                  <div class="col-10">
                    <input type="text" class="form-control" id="published_date" name="published_date" value="<?php echo $news['published_date'];?>"> </div>
                </div>

                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">圖片</label>
                  <div class="col-10">
                    <input type="file" class="form-control" id="picture" name="picture"> </div>
                </div>
                
                <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label" contenteditable="true">標題</label>
                  <div class="col-10">
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $news['title'];?>"> </div>
                </div>
                <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label">內容</label>
                  <div class="col-10">
                    <textarea rows="5" class="form-control" name="description"><?php echo $news['description'];?>"</textarea> </div>
                    <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
                    <input type="hidden" name="EditForm" value="EDIT">
                    <input type="hidden" name="news_id" value="<?php echo $_GET['gnewsID']?>">
                </div>
                <button type="submit" class="btn mr-3 btn-primary">取消回上一頁</button><button type="submit" class="btn btn-secondary">確定送出</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once('../layouts/footer.php');  ?>
  <script>
    $(function(){
      console.log("Test");
      $( "#published_date" ).datepicker({
        dateFormat: "yy-mm-dd"
      });
    });
    //CKEDITOR.replace( 'description' );
  </script>

</body>

</html>