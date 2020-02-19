<?php
//関数作成
function login($cn,$table,$w_column,$id,$what){
    $id = "'".$id."'";
    $what = "'".$what. "'";
    $sql = "SELECT * FROM " .$table. " WHERE login_id = ".$id." AND ".$w_column." = ".$what.";";
    $result = mysqli_query($cn,$sql);
    mysqli_close($cn);
    return $result;
}


//英数字が含まれているか
function is_alphanum($data) {
    if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]+\z/i', $data)) {
        // 英数字の場合
        return true;
    }
    else {
        // 英数字ではない場合
        return false;
    }
}
?>