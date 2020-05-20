<?php
    session_start();
    require_once('../../connection/connection.php');
    $query = $db->query("SELECT * FROM member WHERE email = '".$_POST['email']."' AND password='".$_POST['password']."'");
    $has_user = $query->fetch(PDO::FETCH_ASSOC);
    print_r($has_user);
    if($has_user > 0){
        $_SESSION['user'] = $has_user;
        header('Location: ../about.php');
    }else{
        header('Location: ../login_error.php');
    }


?>