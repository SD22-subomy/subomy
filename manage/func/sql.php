<?php

require_once './../../config.php';

class TableId {
  const ID = [
    'user' => 'user_id',
    'shop' => 'shop_id',
    'reservation' => 'reser_id',
    'design' => 'design_id',
  ];
}

/**
 * 
 * 
 */
function select_user_all($table) {
  $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($cn,'utf8');
  $sql = "SELECT * from ".$table." ;";
  $result = mysqli_query($cn,$sql);
  while($row = mysqli_fetch_assoc($result)){
    $row_list[] = $row;
  }
  mysqli_close($cn);
  if ( isset($row_list) ) {
    return $row_list;
  }
}

function select_one($id, $table) {
  $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($cn,'utf8');
  $sql = "SELECT user_id, name, pass from ".$table." WHERE user_id = '".$id."' ;";
  $result = mysqli_query($cn,$sql);
  $row = mysqli_fetch_assoc($result);
  mysqli_close($cn);
  return $row;
}

function select_max_id($table) {
  // $arrayTbl = [
  //   'design' => 'design_id',
  //   ];
  // $col = $arrayTbl[$table];
  $col = TableId::ID[$table];
  $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($cn,'utf8');
  $sql = "select max(".$col.") from ".$table." ;";
  $result = mysqli_query($cn,$sql);
  $row = mysqli_fetch_assoc($result);
  mysqli_close($cn);
  return $row["max(".$col.")"];
}

function insert_design($max_id, $value) {
  $next_id = $max_id + 1;
  $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($cn,'utf8');
  $sql = "insert into design (design_id, design) values (".$next_id.", '".$value."');";
  var_dump($next_id);
  mysqli_query($cn,$sql);
  mysqli_close($cn);
}

function delete($id, $table) {
  $col = TableId::ID[$table];
  $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($cn,'utf8');
  $sql = "DELETE FROM ".$table." WHERE ".$col." = '".$id."' ;";
  mysqli_query($cn,$sql);
  mysqli_close($cn);
}

function permute_pass($id, $new_pass, $table) {
  $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($cn,'utf8');
  $sql = "update ".$table." set pass = '".$new_pass."' where user_id = '".$id."';";
  mysqli_query($cn,$sql);
  mysqli_close($cn);
}
?>