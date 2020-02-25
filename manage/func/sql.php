<?php

require_once './../../config.php';

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

function delete($id, $table) {
  $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($cn,'utf8');
  $sql = "DELETE FROM ".$table." WHERE user_id = '".$id."' ;";
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