<?php
//
//
//////////////////////////////////////////
session_start();
$shop_id = $_SESSION['shop_id'];
var_dump($shop_id);

require '../shop_tpl/mypage.html';
?>