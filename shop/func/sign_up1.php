<?php

//新規登録
//
//
///////////////////////////////////////////////////////////////////////////////
//管理変数
//空白チェック
$err_msg = [];
$err_msg[0] = "店舗名が入力されていません";
$err_msg[1] = "店舗住所が入力されていません";
$err_msg[2] = "電話番号が入力されていません";
$err_msg[3] = "メールアドレスが入力されていません";
$err_msg[4] = "パスワードが入力されていません";

//例外入力
$err_msg[5] = "数字以外が入力されています";
$err_msg[6] = "正しい形式で入力してください";
///////////////////////////////////////////////////////////////////////////////
require 'func.php'; //関数呼び出し
$msg = []; //エラーメッセージ
$cnt = 0; //イベントフラグ
//初期化
for ($i = 0; $i < 5; $i++) {
    $msg[] = "";
}

if (isset($_POST['next'])) {
    $data[0] = $_POST['name']; //店舗名
    $data[1] = $_POST['address']; //店舗住所
    $data[2] = $_POST['tel']; //電話番号
    $data[3] = $_POST['mail']; //メールアドレス
    $data[4] = $_POST['pass']; //パスワード
    //var_dump($val);
    //空白チェック  
    for ($i = 0; $i < count($data); $i++) {
        if ($data[$i] =="") {
            $msg[$i] = $err_msg[$i];
            $cnt++;
        }
    }
    if($data[2] == ""){
        $msg[2] = $err_msg[2];
        $cnt++;
    }elseif(is_numeric($data[2]) === false){
        $msg[2] = $err_msg[5];
        $cnt++;
    }

    if ($data[3] == '') {
        $msg[3] = $err_msg[3];
        $cnt++;
    }
    elseif (strpos($data[3], '@') === false) {
        $msg['3'] = $err_msg[6];
        $cnt++;
    }


//フラグチェック
    if ($cnt == 0) {
//ページ遷移
        session_start();
        $_SESSION['name'] = $data[0];
        $_SESSION['address'] = $data[1];
        $_SESSION['tel'] = $data[2];
        $_SESSION['mail'] = $data[3];
        $_SESSION['pass'] = $data[4];
        $_SESSION['address'] = $data[5];
        header('Location:../shop_tpl/sign_up2.php'); //次のページへ
    }
}

require '../shop_tpl/sign_up1.php';
?>