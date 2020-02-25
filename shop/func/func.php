<?php
//関数作成

//ランダムな文字列を作成(shopのログインIDとなる)
function CreateRandom($length) {
    $str = array_merge(range('a', 'z'), range('A', 'Z"'), range('0', '9'));
    for ($i = 0; $i < $length; $i++) {
        $result .= $str[rand(0, count($str)-1)];
    }
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


//DB関係
//DB登録
function db_Register($cn,$table,$data){
    $col = '';
    $value = '';
    foreach ($data as $key => $val) {
        $col .= $key.',';
        $value .= "'".$val."',";
    }
    $col = "(".substr($col,0,strlen($col)-1).")";
    $value = "(".substr($value,0,strlen($value)-1).")";
    $sql = "INSERT INTO ".$table.$col." VALUES".$value.";";
    $result = mysqli_query($cn,$sql);
    mysqli_close();
    return $result;
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
function shop_select($cn,$sql){
    $result = mysqli_query($cn,$sql);
    mysqli_close($cn);
    return $result;
}


//////////////////////////////////////////////////
//SQL文

//SQL SELECT文
function sql_info($table,$col,$id){
    $sql = "SELECT * FROM ".$table." WHERE ".$col." = ".$id.";";
    return $sql;
}

function sql_shop_login($table,$data,$id){
    $col = '';
    $value = '';
    foreach ($data as $key => $val) {
        $col .= $key." = '".$val."' AND ";
        // $value .= "'".$val."',";
    }
    $col = substr($col,0,strlen($col)-4);

    if($id != ""){
        $sql = "SELECT * FROM ".$table." WHERE ".$table."_id = ".$id.";";
    }else{
        $sql = "SELECT * FROM ".$table." WHERE ".$col.";";
    }
    return $sql;
}


//SQL結合
function shop_inner($table,$col,$id,$where){
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
        if($where != ""){
            $sql = $sql." WHERE ".$where." = ".$id.";";
        }else{
            $sql = $sql." WHERE ".$linking1." = ".$id.";";
        }
    }else{
        $sql = $sql.";";
    }
    return $sql;
}
?>