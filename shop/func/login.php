<?php
//ログイン画面
//
//
///////////////////////////////////////////////////////
require 'func.php'; //関数呼び出し
require '../../config.php';//データベース情報呼び出し

$msg = "";

if(isset($_POST['login'])){
    /////////////////////////////////////////////////
    $err_msg = [];
    $err_msg[0] = "IDまたはパスワードが入力されていません。";
    $err_msg[1] = "IDまたはパスワードが違います。";

    ////////////////////////////////////////////////
    $data = [];
    $data =[
        'login_id' => $_POST['id'],
        'pass' => $_POST['pass'],
    ];

    if($data['login_id'] != "" && $data['pass'] != ""){
        //データベース接続
        $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
        mysqli_set_charset($cn,'utf8');

        //SQL文
        $sql = sql_shop_login('shop',$data,"");
        $row = mysqli_fetch_assoc(shop_select($cn,$sql));
        if($row != ""){
            session_start();
            $_SESSION['shop_id'] = $row['shop_id'];
            header('Location:mypage.php');
            exit;
        }else{
            $msg = $err_msg[1];
        }
    }else{
        $msg = $err_msg[0];
    }
}
require '../shop_tpl/login.php';
?>