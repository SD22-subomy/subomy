<?php
/*---------------------------------------
/* pg_name: controller
/*---------------------------------------
/* HEW-team3:
/*---------------------------------------
/* date: 2020/02/19
/*--------------------------------------*/

require_once './../function/user_func.php';

session_start();

//デバック用
// var_dump();
// var_dump($_POST['']);
// var_dump(,$_SESSION['']);

$pre_list = read_db('prefectures');
$genre_list = read_db('genre');
$cuisine_list = read_db('cuisine');
$use_list = read_db('use_scene');
$com_list = read_db('commitment');


//登録
if(isset($_POST['send'])){

	echo '登録完了';
}

//戻る
if(isset($_POST['back'])){

	header("location: ./../index.php");
	exit;
}

require_once './../user_tpl/condition.php';


?>