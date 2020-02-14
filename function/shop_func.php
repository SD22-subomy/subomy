<?php
/*---------------------------------------
/* pg_name: shop_func
/*---------------------------------------
/* HEW team3:
/*---------------------------------------
/* date: 2020/02/14
/*--------------------------------------*/



//読み込み
require './func.php';


/**
 * ＜店舗＞ログイン時のIDパスワードが一致するか調べる関数
 *
 * @param string $id 入力ID
 * @param string $pass 入力パスワード
 * @return bool ログインできる場合はtrue できない場合はfalse
 */

function shop_login($id,$pass){

    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');
    $sql = "SELECT pass from shop WHERE login_id = '".h($id)."';";
    $result = mysqli_query($cn,$sql);
    $row = mysqli_fetch_assoc($result); 
    mysqli_close($cn);

    // if(is_null($row['pass'])){
    //     $msg = 'ログインIDが正しくありません';
    // }else if($row['pass'] == h($pass)){
    //     $msg = 'ログイン完了';
    // }else{
    //     $msg = 'パスワードが正しくありません';
    // }

    if($row['pass'] == h($pass)){
        return true;
    }
    return false;
}


?>