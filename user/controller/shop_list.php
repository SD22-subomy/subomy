<?php
/*---------------------------------------
/* pg_name: shop_list
/*---------------------------------------
/* HEW-team3:
/*---------------------------------------
/* date: 2020/02/21
/*--------------------------------------*/

require_once './../function/user_func.php';

session_start();


if(isset($_GET['genre'])){
	$shop_id = search_genre($_GET['genre']);
}

//デバック用
//var_dump($shop_id);

require_once './../user_tpl/shop_list.php';


?>