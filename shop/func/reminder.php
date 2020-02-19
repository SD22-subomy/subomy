<?php
//確認するを押したときの処理
$cnt = 0; //エラーカウント

if(isset($_POST['regist'])){
    ///////////////////////////////////////////////////
    $err_msg = [];
    $err_msg[0] = "店舗番号が入力されていません。<br>";
    $err_msg[1] = "メールアドレスが入力されていません。<br>";
    $err_msg[2] = "店舗番号は7桁の英数字の組み合わせです。<br>";
    $err_msg[3] = "正しい形式で入力してください。";
    $err_msg[4] = "入力された店舗番号、もしくは通知用メールアドレスが現在登録されているものと一致しませんでした。<br>ご確認の上、再度入力してください。";
    
    //////////////////////////////////////////////////
    require 'func.php';//関数呼び出し
    require '../../config.php';
    
    $msg = "";
    
    $login_id = $_POST['login_id'];
    $mail = $_POST['mail'];

    //空白チェック
    if($login_id == ""){
        $cnt++;
        $msg = $err_msg[0];
    }elseif(strlen($login_id) != 7){
        $msg = $err_msg[2];
        $cnt++;
    }elseif(is_alphanum($login_id) === false){
        $msg = $err_msg[2];
        $cnt++;
    }
    if($mail == ""){
        $msg = $msg.$err_msg[1];
        $cnt++;
    }elseif(strpos($mail,'@') === false){
        $msg = $msg.$err_msg[3];
        $cnt++;
    }


    if($cnt == 0){
        //データベースにて情報の確認
        $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
        mysqli_set_charset($cn,'utf8');
        if(mysqli_fetch_assoc(login($cn,'shop','mail',$login_id,$mail)) != ""){
            session_start();
            $_SESSION['login_id'] = $login_id;
            $_SESSION['mail'] = $mail;
            header('Location:reminder1.php');
            exit;    
        }else{
            $msg = $err_msg[4];
            $cnt++;
        }
    }
}

//戻るを押した処理
if(isset($_POST['back'])){
    header('Location:login.php');
    exit;
}




require '../shop_tpl/reminder.php';
?>