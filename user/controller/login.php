<?php
/*---------------------------------------
/* pg_name: login
/*---------------------------------------
/* HEW-team3:
/*---------------------------------------
/* date: 2020/02/18
/*--------------------------------------*/

require_once './../function/user_func.php';

session_start();

//デバック用
// var_dump($mail,$pass);
// var_dump($_POST['mail'],$_POST['pass']);
// var_dump(,$_SESSION['mail'],$_SESSION['pass']);

$err_flg = 0;

//ログイン
if(isset($_POST['login'])){

	$mail = $_POST['mail'];
	$pass = $_POST['password'];

	if(user_login($mail,$pass)){

		$_SESSION['user_id'] = user_id_check($mail,$pass);
		header("location: ./../index.php");
		exit;
	}else{

		$err_flg = 1;
		require_once './../user_tpl/login.php';
		exit;
	}
}

require_once './../user_tpl/login.php';


?>