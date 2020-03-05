<?php
/////////////////////////////////////////
require 'func.php';//関数呼び出し
require '../../config.php';
/////////////////////////////////////////
session_start();
$id = $_SESSION['shop_id'];

$color = $_SESSION['color_id'];
$design = $_SESSION['design_id'];

//データベース接続(shop_design)
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');

$col = ['color_id','design_id'];
$what = [$color,$design];
$sql = shopDesign('shop_design',$col,$what,$id);
update($cn,$sql);

if(isset($_POST['logout'])){
    session_destroy();
    header('Location:login.php');
}

require '../shop_tpl/design_Register.php';
?>