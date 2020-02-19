<?php
/*---------------------------------------
/* pg_name: user_func
/*---------------------------------------
/* HEW team3:
/*---------------------------------------
/* date: 2020/02/14
/*--------------------------------------*/



//読み込み
require_once(dirname(__FILE__).'./func.php');


/**
 * ＜利用者＞ログイン時のメールアドレス,パスワードが一致するか調べる関数
 *
 * @param string $mail 入力メールアドレス
 * @param string $pass 入力パスワード
 * @return bool ログインできる場合はtrue できない場合はfalse
 */

function user_login($mail,$pass){

    if(empty($mail) || empty($pass)){
        return false;
    }

    /*--------------データベース処理-------------------------*/
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');
    $sql = "SELECT pass FROM user WHERE mail = '".h($mail)."';";
    $result = mysqli_query($cn,$sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($cn);

    /*----メッセージを返す------------------*/
    // if(is_null($row['pass'])){
    //     $msg = 'メールアドレスが正しくありません';
    // }else if($row['pass'] == h($pass)){
    //     $msg = 'ログイン完了';
    // }else{
    //     $msg = 'パスワードが正しくありません';
    // }

    if($row['pass'] == h($pass)){
        return true;
    }else{
        return false;
    }

}


/**
 * ＜利用者＞メールアドレス,パスワードからユーザIDを呼び出す関数
 *
 * @param string $mail メールアドレス
 * @param string $pass パスワード
 * @return string ユーザID
 */

function user_id_check($mail,$pass){

    /*--------------データベース処理-------------------------*/
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');
    $sql = "SELECT user_id FROM user WHERE mail = '".h($mail)."' AND pass = '".h($pass)."';";
    $result = mysqli_query($cn,$sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($cn);

    return $row['user_id'];

}


/**
 * ＜利用者＞新規登録者情報をDBに書き込む関数
 *
 * @param string $name 名前
 * @param string $tel 電話番号
 * @param int $gender 性別
 * @param string $mail メールアドレス
 * @param string $pass パスワード
 * @return なし
 */

function user_regist($name,$tel,$gender,$mail,$pass){

    /*--------------データベース処理-------------------------*/
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');
    $sql = "INSERT INTO user(name,tel,gender,mail,pass)VALUES('".$name."','".$tel."','".$gender."','".$mail."','".$pass."');";
    mysqli_query($cn,$sql);
    mysqli_close($cn);

}


/**
 * ＜利用者＞メールアドレスが既に登録されているか調べる関数
 *
 * @param string $mail 入力メールアドレス
 * @return bool 登録されている場合はtrue されていない場合はfalse
 */

function user_mail_exist($mail){

    /*--------------データベース処理-------------------------*/
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');
    $sql = "SELECT * FROM user WHERE mail = '".h($mail)."' LIMIT 1;";
    $result = mysqli_query($cn,$sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($cn);

    return (isset($row));

}


/**
 * ＜利用者＞電話番号が既に登録されているか調べる関数
 *
 * @param string $tel 入力電話番号
 * @return bool 登録されている場合はtrue されていない場合はfalse
 */

function user_tel_exist($tel){

    /*--------------データベース処理-------------------------*/
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');
    $sql = "SELECT * FROM user WHERE tel = '".h($tel)."' LIMIT 1;";
    $result = mysqli_query($cn,$sql);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($cn);

    return (isset($row));

}


/**
 * ＜利用者＞新規会員登録時に入力情報が正しいか調べる関数
 *
 * @param string $name 入力氏名
 * @param string $tel 入力電話番号
 * @param string $mail 入力メールアドレス
 * @param string $pass 入力パスワード
 * @return bool 登録可能な場合はtrue 不可能な場合はfalse
 */

function user_regist_check($name,$tel,$mail,$pass){

    if(empty($name) || empty($tel) || empty($mail) ||empty($pass)){
        return false;
    }

    if(is_numeric($tel) && isEmail($mail)){
        if(user_tel_exist($tel) || user_mail_exist($mail)){
            return false;
        }else{
            return true;
        }
    }else{
        return false;
    }

}

/**
 * ＜利用者＞絞り込み条件を登録する関数関数
 *
 *.@param string $id ユーザID
 * @param string $pre_id 選択都道府県ID
 * @param string $genre_id 選択ジャンルID
 * @param string $cuisine_id 選択料理ジャンルID
 * @param string $use_id 選択利用シーンID
 * @param string $com_id 選択こだわり条件ID
 * @return なし
 */

function condition_regist($id,$pre_id,$genre_id,$cuisine_id,$use_id,$com_id){

    /*--------------データベース処理-------------------------*/
    $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($cn,'utf8');
    $sql = "INSERT INTO conditions(user_id,pre_id,genre_id,cuisine_id,use_id,com_id)VALUES('".$id."','".$pre_id."','".$genre_id."','".$cuisine_id."','".$use_id."','".$com_id."');";
    mysqli_query($cn,$sql);
    mysqli_close($cn);

}

?>