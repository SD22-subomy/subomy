<?php
/*---------------------------------------
/* pg_name: main_func
/*---------------------------------------
/* HEW team3:
/*---------------------------------------
/* date: 2020/02/14
/*--------------------------------------*/



//読み込み
require_once './../config.php';



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


/**
 * 渡されたパスワードをすべて*にする関数
 *
 * @param string $pass 変換したい文字列
 * @return string すべて*になった文字列
 */
function wrap_pass(string $pass)
{
  return str_repeat('*', strlen($pass));
}


/**
 * 指定したDBの情報を全て取って配列に格納する関数
 *
 * @param string $db 取り出したいDB名
 * @return array 取得したレコードの二次元配列
 */
function read_db(string $db)
{
  $list = [];
  /*--------------データベース接続-------------------------*/
  $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($cn,"utf8");
  $sql = "SELECT * FROM ".$db.";";
  var_dump($sql);
  $result = mysqli_query($cn,$sql);
  mysqli_close($cn);

  while($row = mysqli_fetch_assoc($result)){
    $list[] = $row;
  }

  return $list;
}


?>