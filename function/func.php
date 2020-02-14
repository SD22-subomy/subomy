<?php
/*---------------------------------------
/* pg_name: shop_login
/*---------------------------------------
/* HEW team3:
/*---------------------------------------
/* date: 2020/02/14
/*--------------------------------------*/



//読み込み
require './../config.php';



/**
 * エスケープ処理をする関数
 *
 * @param string $s エスケープしたい文字列
 * @return Response エスケープされた文字列
 */

function h($s)
{
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

?>