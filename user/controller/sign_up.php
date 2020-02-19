<?php
/*---------------------------------------
/* pg_name: sign_up
/*---------------------------------------
/* HEW-team3:
/*---------------------------------------
/* date: 2020/02/17
/*--------------------------------------*/

require_once './../function/user_func.php';

$name = '';
$tel = '';
$gender = '';
$mail = '';


session_start();

//デバック用
// var_dump($name,$tel,$gender,$mail,$pass);
// var_dump($_POST['name'],$_POST['tel'],$_POST['gender'],$_POST['mail'],$_POST['pass']);
// var_dump($_SESSION['name'],$_SESSION['tel'],$_SESSION['gender'],$_SESSION['mail'],$_SESSION['pass']);


//確認
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

//戻る
if(isset($_POST['back'])){

	$name = $_SESSION['name'];
	$tel = $_SESSION['tel'];
	$gender = $_SESSION['gender'];
	$mail = $_SESSION['mail'];
	$pass = '';
	require_once './../user_tpl/sign_up.php';
	exit;
}

//登録
if(isset($_POST['regist'])){

	$name = $_SESSION['name'];
	$tel = $_SESSION['tel'];
	$gender = $_SESSION['gender'];
	$mail = $_SESSION['mail'];
	$pass = $_SESSION['pass'];
	user_regist($name,$tel,$gender,$mail,$pass);
	session_destroy();
	require_once './../user_tpl/sign_up_over.php';
	exit;
}

require_once './../user_tpl/sign_up.php';


?>