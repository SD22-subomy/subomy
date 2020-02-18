<?php
/*---------------------------------------
/* pg_name: sign_up
/*---------------------------------------
/* HEW-team3:
/*---------------------------------------
/* date: 2020/02/17
/*--------------------------------------*/

require_once './../../function/user_func.php';


session_start();


if(isset($_POST['send'])){

	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$gender = $_POST['gender'];
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];

	if(user_regist_check($name,$tel,$mail,$pass)){

		$_SESSION['name'] = $name;
		$_SESSION['tel'] = $tel;
		$_SESSION['gender'] = $gender;
		$_SESSION['mail'] = $mail;
		$_SESSION['pass'] = $pass;

		require_once './../user_tpl/sign_up_check.php';
		exit;
	}else{

		$_SESSION['pass'] = '';
		require_once './../user_tpl/sign_up.php';
		exit;
	}
}

if(isset($_POST['back'])){

	$name = $_SESSION['name'];
	$tel = $_SESSION['tel'];
	$gender = $_SESSION['gender'];
	$mail = $_SESSION['mail'];
	$pass = '';
	require_once './../user_tpl/sign_up.php';
	exit;
}

if(isset($_POST['regist'])){

	session_destroy();
	require_once './../user_tpl/sign_up_over.php';
	exit;
}

session_destroy();
require_once './../user_tpl/sign_up.php';


?>