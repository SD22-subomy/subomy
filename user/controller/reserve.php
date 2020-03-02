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

$user_id = $_SESSION['user_id'];

//ログインしていないとき
if(is_null($user_id)){

	header("location: ./login.php");
	exit;
}

$err = 0;
$shop_id = $_SESSION['reserve_shop'];
$shop_info = get_shop_info($shop_id);
$course_list = get_course_list($shop_id);

$date = $_SESSION['reserve_date'];
if(isset($_GET['date'])){
	$date = $_GET['date'];
}

//確認
if(isset($_GET['check'])){

	if(!isset($_GET['number']) || !isset($_GET['time']) || !isset($_GET['course'])){

		$err++;
		require_once './../user_tpl/reserve.php';
		exit;
	}

	$number = $_GET['number'];
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

//戻るボタン
if(isset($_GET['back'])){

	require_once './../user_tpl/reserve.php';
	exit;
}

//予約確定
if(isset($_GET['confirm'])){

	$num = $_GET['num'];
	$date = $_GET['date'];
	$time = $_GET['time'];
	$course_id = $_GET['course_id'];

	reserve($user_id,$shop_id,$date,$time,$num,$course_id);

	require_once './../user_tpl/reserve_over.php';
	exit;
}

require_once './../user_tpl/reserve.php';


?>