<?php
/*---------------------------------------
/* pg_name: user_top
/*---------------------------------------
/* HEW-team3:
/*---------------------------------------
/* date: 2020/02/17
/*--------------------------------------*/

session_start();

//デバック用
//var_dump($_SESSION['user_id']);

/*----ログイン時--------------*/
if(isset($_SESSION['user_id'])){

	require_once 'user_tpl/my_page.php';
	exit;
}


require_once 'user_tpl/top_page.php';

?>