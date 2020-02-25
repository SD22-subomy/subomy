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

?>