<?php
/*---------------------------------------
/* pg_name: my_page
/*---------------------------------------
/* HEW-team3:
/*---------------------------------------
/* date: 2020/02/18
/*--------------------------------------*/

require_once './../function/user_func.php';

session_start();

//戻る
if(isset($_POST['back'])){

	header("location: ./../index.php");
	exit;
}
$event = get_reserve_info($_SESSION['user_id']);
$user = get_user_info($_SESSION['user_id']);

require_once './../user_tpl/my_page.php';


?>