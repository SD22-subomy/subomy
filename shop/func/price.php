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

$sql = sql_info('monthly','','');
$result = shop_select($cn,$sql);
$row = mysqli_fetch_assoc($result);
$price = str_split($row['monthly']);
$row['monthly'] = $price[0].",".$price[1].$price[2].$price[3]; 


$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');

$sql = sql_info('shop','shop_id',$id);
$result = shop_select($cn,$sql);
$shop=mysqli_fetch_assoc($result);
// var_dump();

if($shop['monthly'] == 0){
    $msg1= "現在のプランはこちらです";
    $msg2 = "";
}else{
    $msg2= "現在のプランはこちらです";
    $msg1 = "";

}
if(isset($_POST['logout'])){
    session_destroy();
    header('Location:login.php');
}


require '../shop_tpl/price.php';
?>