<?php
//////////////////////////////////////
require 'func.php';//関数呼び出し
require '../../config.php';

/////////////////////////////////////
session_start();
$mail = $_SESSION['mail'];
if(isset($_POST['login'])){
    session_destroy();
    header('Location:login.php');
    exit;
}

require '../shop_tpl/reminder2.php';
?>