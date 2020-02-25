<?php

require_once 'sql.php';

$table = "user";


if ( isset($_POST['permute']) ) {
  var_dump($_POST);
  permute_pass($_POST['id'], $_POST['new_pass'], $table);
  header('Location: ./../views/user_info.php');
  exit;
}

if ( isset($_GET['id']) ) {
  $user = select_one($_GET['id'], $table);
} else if ( isset($_POST['id']) ) {
  $user = select_one($_POST['id'], $table);
}

?>