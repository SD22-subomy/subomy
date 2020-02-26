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
//配列
$col = ['shop_id','shop_id','genre_id','genre_id'];
$table = ['shop','shop_pos','genre'];
//結合SQL作成
$sql = shop_inner($table,$col,$id,"");

//SQL取得
$row = mysqli_fetch_assoc(shop_select($cn,$sql));
if($row == ""){
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');
    $sql = sql_info('shop','shop_id',$id);
    $row = mysqli_fetch_assoc(shop_select($cn,$sql));
    $row += [
        'genre' => "ーーー",
        'access' => "ーーー",
        'shop_time' => "ーーー",
        'holiday' => "ーーー",
        'budget' => "ーーー",
        'table_re' => 'ーーー',
        'counter_re' => 'ーーー',
        'url' => "ーーー",
    ];
}
if(isset($_POST['info'])){
    $_SESSION['shop_id'] = $id;
    $_SESSION['genre'] = $row['genre'];
    $_SESSION['access'] = $row['access'];
    $_SESSION['shop_time'] = $row['shop_time'];
    $_SESSION['holiday'] = $row['holiday'];
    $_SESSION['budget'] = $irow['budget'];
    $_SESSION['table_re'] = $row['table_re'];
    $_SESSION['counter_re'] = $row['counter_re'];
    $_SESSION['url'] = $row['url'];
    header('Location:info_change.php');
    exit;
}    

require '../shop_tpl/information.php';
?>