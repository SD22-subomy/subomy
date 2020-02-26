<?php
/*---------------------------------------
/* pg_name: shop_info
/*---------------------------------------
/* HEW-team3:
/*---------------------------------------
/* date: 2020/02/22
/*--------------------------------------*/

require_once './../function/user_func.php';

session_start();

//店舗情報取得
if(isset($_GET['shop_id'])){

	$shop_info = get_shop_detail($_GET['shop_id']);
	$course_list = get_course_list($_GET['shop_id']);
}

//予約ボタン
if(isset($_GET['reserve'])){

	$date = '';
	if(isset($_GET['date'])){
		$date = $_GET['date'];
	}
	$_SESSION['reserve_shop'] = $_GET['id'];
	header("location: ./reserve.php#".$date."");
	exit;
}

//デバック用
// var_dump($shop_info);
// var_dump($course_list);

require_once './../user_tpl/shop_info.php';


?>