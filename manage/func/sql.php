<?php

require_once './../../config.php';

/**
 * 
 * 
 */
function select_user() {
  $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($cn,'utf8');
  $sql = "SELECT * from user ;";
  $result = mysqli_query($cn,$sql);
  while($row = mysqli_fetch_assoc($result)){
    $row_list[] = $row3;
  }
  mysqli_close($cn);
  return $row_list;
}

?>