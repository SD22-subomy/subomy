<?php
/*---------------------------------------
/* pg_name: reserve
/*---------------------------------------
/* HEW-team3:
/*---------------------------------------
/* date: 2020/02/22
/*--------------------------------------*/

require_once './../function/user_func.php';

session_start();

//ログインしていないとき
if(is_null($_SESSION['user_id'])){

	header("location: ./login.php");
	exit;
}

$shop_id = $_GET['id'];
$course_list = get_course_list($_GET['id']);


//確認
if(isset($_GET['check'])){

	require_once './../user_tpl/reserve_check.php';
	exit;
}

//予約確定
if(isset($_GET['confirm'])){

	require_once './../user_tpl/reserve_over.php';
	exit;
}


//デバック用
//var_dump($_GET['id'],$_GET['date']);

require_once './../user_tpl/reserve.php';


?>