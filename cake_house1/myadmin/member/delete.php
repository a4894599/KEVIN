<?php
require('../../connection/connection.php');
$sql = "DELETE FROM member WHERE memberID=".$_GET['gmemberID'];
$sth = $db->prepare($sql);
$sth -> execute();
header('Location: list.php');
?>