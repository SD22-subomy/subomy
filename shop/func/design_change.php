<?php
/////////////////////////////////////////
require 'func.php';//関数呼び出し
require '../../config.php';
/////////////////////////////////////////
session_start();
$id = $_SESSION['shop_id'];

//データベース接続(shop_pos)
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
$sql = sql_seach('shop_pos','genre_id','shop_id',$id);
$s_row = mysqli_fetch_assoc(shop_select($cn,$sql));

//データベース接続(color)
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
$sql = sql_info('color','genre_id',$s_row['genre_id']);
$color = mysqli_fetch_assoc(shop_select($cn,$sql));

$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
$sql = sql_info('color',"","");
$result = shop_select($cn,$sql);
$code = [];
$codeCnt = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $code[] = $row;
    $codeCnt++;
}


//データベース接続(design)
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
$sql = sql_info('design',"","");
$result = shop_select($cn,$sql);
$tbl = [];
$cnt = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $tbl[] = $row;
    $cnt++;
}


//データベース接続(shop全ての情報)
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
//配列
$col = ['shop_id','shop_id','genre_id','genre_id'];
$table = ['shop','shop_pos','genre'];
//結合SQL作成
$sql = shop_inner($table,$col,$id,"");

//SQL取得
$shop = mysqli_fetch_assoc(shop_select($cn,$sql));


//データベース接続(shop_info)
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
$sql = sql_info('shop_info',"shop_id",$id);
$result = shop_select($cn,$sql);

$info = [];
$infoCnt = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $info[] = $row;
    $infoCnt++;
}

//データベース接続(course_img)
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
$sql = sql_info('course_img',"shop_id",$id);
$course_img = mysqli_fetch_assoc(shop_select($cn,$sql));

if(isset($_POST['designChange'])){
    $_SESSION['id'] =$id;
    $_SESSION['color_id'] = $_POST['color_id'];
    $_SESSION['design_id'] = $_POST['design_id'];
    header('Location:design_Register.php');
}

require '../shop_tpl/design_change.php';
?>