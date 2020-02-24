<?php


/////////////////////////////////////
require 'func.php'; //関数呼び出し
require '../../config.php';


session_start();
$data = [
    'name' => $_SESSION['name'],
    'addres' => $_SESSION['address'],
    'tel' => $_SESSION['tel'],
    'mail' => $_SESSION['mail'],
    'login_id' => $_SESSION['login_id'],
    'pass' => $_SESSION['pass'],
    'monthly' => '0',
];

//DBに登録
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
db_Register($cn,'shop',$data);

session_destroy();

require '../shop_tpl/sign_up3.php';
?>