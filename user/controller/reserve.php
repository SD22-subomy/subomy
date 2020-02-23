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
$shop_info = get_shop_info($shop_id);


//確認
if(isset($_GET['check'])){

	$number = $_GET['number'];
	$date = $_GET['date'];
	$time = $_GET['time'];
	$course_id = $_GET['course'];

	if($course_id == 0){
		$course = [
			'name' => '選択なし',
			'price' => '',
			'other' => ''
		];
	}else{
		$course = get_course_info($course_id);
	}

	require_once './../user_tpl/reserve_check.php';
	exit;
}

//予約確定
if(isset($_GET['confirm'])){

	require_once './../user_tpl/reserve_over.php';
	exit;
}


$course_list = get_course_list($_GET['id']);

require_once './../user_tpl/reserve.php';


?>