<?php
/*---------------------------------------
/* pg_name: schedule
/*---------------------------------------
/* HEW-team3:
/*---------------------------------------
/* date: 2020/02/28
/*--------------------------------------*/

require_once './../function/user_func.php';

session_start();

//デバック用
// var_dump();
// var_dump($_POST['']);
// var_dump(,$_SESSION['']);

$event = get_reserve_info($_SESSION['user_id']);
//var_dump($event);


//戻る
if(isset($_POST['back'])){

	header("location: ./my_page.php");
	exit;
}

require_once './../user_tpl/schedule.php';


?>