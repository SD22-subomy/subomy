<?php
/////////////////////////////////////////
require 'func.php';//関数呼び出し
require '../../config.php';
/////////////////////////////////////////
session_start();
$id = $_SESSION['shop_id'];

//データベース接続
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');

//SQL文
$sql = sql_seach('shop_pos','genre_id','shop_id',$id);
$s_row = mysqli_fetch_assoc(shop_select($cn,$sql));

//データベース接続
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
$sql = sql_info('color','genre_id',$s_row['genre_id']);
$color = mysqli_fetch_assoc(shop_select($cn,$sql));

require '../shop_tpl/design.php';
?>