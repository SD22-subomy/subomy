<?php

//新規登録
//sign_up2.php
//
//
/////////////////////////////////////////
require 'func.php'; //関数呼び出し

session_start();
$name = $_SESSION['name'];
$address = $_SESSION['address'];
$tel = $_SESSION['tel'];
$mail = $_SESSION['mail'];
$pass = $_SESSION['pass'];

if(isset($_POST['next'])){
    $login_id = CreateRandom(7);
    var_dump($login_id);
    $_SESSION['name'] = $name;
    $_SESSION['address'] = $address;
    $_SESSION['tel'] = $tel;
    $_SESSION['mail'] = $mail;
    $_SESSION['pass'] = $pass;
    $_SESSION['login_id'] = $login_id;
    header('Location:sign_up3.php'); //次のページへ
}

require '../shop_tpl/sign_up2.php';
?>