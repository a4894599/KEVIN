
<?php
require_once('../functions/login_check.php'); 
require('../../connection/connection.php');
$sql = "DELETE FROM news WHERE news_id=".$_GET['gnewsID'];
$sth = $db->prepare($sql);
$sth -> execute();
header('Location: list.php?categoryID='.$_GET['categoryID']);
?>