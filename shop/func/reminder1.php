<?php
//////////////////////////////////////
require 'func.php';//関数呼び出し
require '../../config.php';

/////////////////////////////////////
session_start();
$login_id = $_SESSION['login_id'];
$mail = $_SESSION['mail'];

//確認するを押したときの処理
if(isset($_POST['regist'])){
    $_SESSION['mail'] = $mail;
    header('Location:reminder2.php');
    exit;
}

//戻るを押した処理
if(isset($_POST['back'])){
    header('Location:reminder.php');
    exit;
}




require '../shop_tpl/reminder1.php';
?>