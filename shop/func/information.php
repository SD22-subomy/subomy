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
//結合SQL作成
$sql = shop_inner($table,$col,$id);

//SQL取得
$row = mysqli_fetch_assoc(shop_select($cn,$id,$sql));

if(isset($_POST['info'])){
    session_start();
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $row['name'];
    $_SESSION['genre'] = $row['genre'];
    $_SESSION['tel'] = $row['tel'];
    $_SESSION['addres'] = $row['addres'];
    $_SESSION['access'] = $row['access'];
    $_SESSION['shop_time'] = $row['shop_time'];
    $_SESSION['holiday'] = $row['holiday'];
    $_SESSION['budget'] = $row['budget'];
    $_SESSION['url'] = $row['url'];

    header('Location:info_change.php');
    exit;
}
require '../shop_tpl/information.php';
?>