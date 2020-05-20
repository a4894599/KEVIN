<?php
session_start();
unset($_SESSION['user']);
header('Location: ../logout_success.php');
?>