<?php
/////////////////////////////////////////
require 'func.php';//関数呼び出し
require '../../config.php';
/////////////////////////////////////////

//データベース接続
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');

$sql = sql_info('monthly','','');
// var_dump($sql);
$result = shop_select($cn,$sql);
//SQL取得
$tbl = [];
$cnt = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $tbl[] = $row;
    $cnt++;
}

if(isset($_POST['logout'])){
    session_destroy();
    header('Location:login.php');
}


require '../shop_tpl/price.php';
?>