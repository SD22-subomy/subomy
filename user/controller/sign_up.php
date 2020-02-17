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

require_once './../user_tpl/sign_up.html';

if(isset($_POST['send'])){

	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$gender = $_POST['gender'];
	$mail = $_POST['mail'];
	$pass = $_POST['pass'];

	if(user_regist_check($tel,$mail)){

		$_SESSON['name'] = $name;
		$_SESSION['tel'] = $tel;
		$_SESSION['gender'] = $gender;
		$_SESSION['mail'] = $mail;
		$_SESSION['pass'] = $pass;

		require_once './../user_tpl/sign_up_check.html';
		exit;
	}else{

		require_once './../user_tpl/sign_up.html';
		exit;
	}
}

if(isset($_POST['back'])){

	require_once './../user_tpl/sign_up.html';
	exit;
}

if(isset($_POST['regist'])){

	require_once './../user_tpl/sign_up_over';
	exit;
}


require_once './../index.php'

session_destroy();


?>