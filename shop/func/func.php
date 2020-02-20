<?php
//関数作成

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

function login($cn,$table,$w_column,$id,$what){
    $id = "'".$id."'";
    $what = "'".$what. "'";
    $sql = "SELECT * FROM " .$table. " WHERE login_id = ".$id." AND ".$w_column." = ".$what.";";
    $result = mysqli_query($cn,$sql);
    mysqli_close($cn);
    return $result;
}

//店舗情報DB取得
function shop_select($cn,$id,$sql){
    $id = "'".$id."'";
    $result = mysqli_query($cn,$sql);
    mysqli_close($cn);
    return $result;
}


//////////////////////////////////////////////////
//SQL文
function db_sql($table,$id){
    $sql = "SELECT * FROM ".$table." WHERE shop_id = ".$id.";";
    return $sql;
}

//SQL結合
function shop_inner($table,$col,$id){
    $sql = "SELECT * FROM ".$table[0];
    if($table[1] != ""){
        $linking1 = $table[0].".".$col[0];
        $linking2 = $table[1].".".$col[1];
        $sql = $sql." INNER JOIN ".$table[1]." ON ".$linking1." = ".$linking2;
    }
    if($table[2] != ""){
        if($col[3] != ""){
            $linking3 = $table[2].".".$col[2];
            for($i = 0;$i < 3; $i++){
                if($col[$i] == $col[3]){
                    if($i == 2){
                        $a = $i - 1;
                        $linking4 = $table[$a].".".$col[3];
                    }else{
                        $linking4 = $table[$i].".".$col[3];
                    }
                }
            }
            $sql = $sql." INNER JOIN ".$table[2]." ON ".$linking4." = ".$linking3;
        }else{
            $linking3 = $table[2].".".$col[2];
            if($col[0] == $col[2]){
                $sql = $sql." INNER JOIN ".$table[2]." ON ".$linking1." = ".$linking3;
            }elseif($col[1] == $col[2]){
                $sql = $sql." INNER JOIN ".$table[2]." ON ".$linking2." = ".$linking3;
            }
        }
    }
    if($id != ""){
        $sql = $sql." WHERE ".$linking1." = ".$id.";";
    }else{
        $sql = $sql.";";
    }
    return $sql;
}
?>