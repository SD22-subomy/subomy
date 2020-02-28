<?php
/*---------------------------------------
/* pg_name: shop_list
/*---------------------------------------
/* HEW-team3:
/*---------------------------------------
/* date: 2020/02/21
/*--------------------------------------*/

require_once './../function/user_func.php';

session_start();

//ログアウト
if(isset($_POST['logout'])){

	$_SESSION = array();
	session_destroy();
}

//ログイン判定
$login_flg = isset($_SESSION['user_id']);


$shop_info = [];

if(isset($_GET['genre'])){
	$shop_id = search_genre($_GET['genre']);
	$shop_info = get_shop_list($shop_id);
}

//デバック用
//var_dump($shop_info);

require_once './../user_tpl/shop_list.php';


?>