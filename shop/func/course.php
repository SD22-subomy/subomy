<?php
/////////////////////////////////////////
require 'func.php';//関数呼び出し
require '../../config.php';
/////////////////////////////////////////

session_start();
$id = $_SESSION['shop_id'];
// $id= 1;

//データベース接続
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');

//SQL文
$sql = sql_info('course','shop_id',$id);
// var_dump($sql);
$result = shop_select($cn,$sql);
//SQL取得
$tbl = [];
$cnt = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $tbl[] = $row;
    $cnt++;
}


if(isset($_POST['intro'])){
    session_start();
    $_SESSION['shop_id'] = $id;
    header('Location:info_change.php');
    exit;
}
require '../shop_tpl/course.php';
?>