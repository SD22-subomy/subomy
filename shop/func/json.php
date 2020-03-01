<?php
/////////////////////////////////////////
require 'func.php';//関数呼び出し
require '../../config.php';
/////////////////////////////////////////
session_start();
$id = $_SESSION['shop_id'];

//データベース接続(shop_design)
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
$col = ['design_id','design_id','color_id','color_id'];
$table = ['design','shop_design','color',];
$sql = shop_inner($table,$col,$id,'shop_design.shop_id');
$row = mysqli_fetch_assoc(shop_select($cn,$sql));
//JavaScriptに渡すためにjson_encodeを行う
header("Content-type: application/json; charset=UTF-8");
echo json_encode($row);
exit;
?>