<?php
/*---------------------------------------
/* pg_name: user_func
/*---------------------------------------
/* HEW team3:
/*---------------------------------------
/* date: 2020/02/14
/*--------------------------------------*/



//定数読み込み
require './../config.php';
require './func.php';


/**
 * ＜利用者＞ログイン時のメールアドレス,パスワードが一致するか調べる関数
 *
 * @param string $mail 入力メールアドレス
 * @param string $pass 入力パスワード
 * @return bool ログインできる場合はtrue できない場合はfalse
 */

function user_login($mail,$pass){

    if(isEmail($mail)){

        $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
        mysqli_set_charset($cn,'utf8');
        $sql = "SELECT pass from user WHERE mail = '".h($mail)."';";
        $result = mysqli_query($cn,$sql);
        $row = mysqli_fetch_assoc($result); 
        mysqli_close($cn);

        if($row['pass'] == h($pass)){
            return true;
        }

        // if(is_null($row['pass'])){
        //     $msg = 'メールアドレスが正しくありません';
        // }else if($row['pass'] == h($pass)){
        //     $msg = 'ログイン完了';
        // }else{
        //     $msg = 'パスワードが正しくありません';
        // }
    }

    return false;
}

?>