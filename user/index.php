<?php
/*---------------------------------------
/* pg_name: user_top
/*---------------------------------------
/* HEW-team3:
/*---------------------------------------
/* date: 2020/02/17
/*--------------------------------------*/

require_once './function/user_func.php';

session_start();

//デバック用
//var_dump($_POST['logout']);
//var_dump($_SESSION['user_id']);


//ログアウト
if(isset($_POST['logout'])){

	$_SESSION = array();
	session_destroy();
}

//ログイン判定
$login_flg = isset($_SESSION['user_id']);

// //ログイン時
// if($login_flg){

// 	require_once 'user_tpl/my_page.php';
// 	exit;
// }

$genre = read_db('genre');
$use_scene = read_db('use_scene');
$commitment = read_db('commitment');
$area = get_area('27');

require_once 'user_tpl/top_page.php';

?>