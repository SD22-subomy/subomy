<?php
/////////////////////////////////////////
require 'func.php';//関数呼び出し
require '../../config.php';
/////////////////////////////////////////

// session_start();
// $id = $_SESSION['id'];
$id= 1;

//データベース接続
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
//配列
$col = ['shop_id','shop_id','genre_id','genre_id'];
$table = ['shop','shop_pos','genre'];
//SQL文
$sql = db_sql('shop_info',$id);

//SQL取得
$row = mysqli_fetch_assoc(shop_select($cn,$id,$sql));

if(isset($_POST['intro'])){
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['title'] = $row['title'];
    $_SESSION['info'] = $row['info'];
    header('Location:info_change.php');
    exit;
}
require '../shop_tpl/introduction.php';
?>