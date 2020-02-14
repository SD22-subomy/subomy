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


/**
 * 渡された文字列がメールアドレスかをチェックする関数
 *
 * @param string $address チェックしたい文字列
 * @return bool メールアドレスの場合はtrue 違う場合はfalse
 */
function isEmail(string $address)
{
  if (filter_var($address, FILTER_VALIDATE_EMAIL)) {
    return true;
  }
  if (strpos($address, '@docomo.ne.jp') !== false || strpos($address, '@ezweb.ne.jp') !== false) {
    $pattern = '/^([a-zA-Z])+([a-zA-Z0-9\._-])*@(docomo\.ne\.jp|ezweb\.ne\.jp)$/';
    if (preg_match($pattern, $address) === 1) {
      return true;
    }
  }
  return false;
}

?>