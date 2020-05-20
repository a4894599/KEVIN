
<?php
require_once('../functions/login_check.php'); 
require('../../connection/connection.php');
$sql = "DELETE FROM category WHERE news_categoryID=".$_GET['gnews_categoryID'];
$sth = $db->prepare($sql);
$sth -> execute();
header('Location: list.php');
?>