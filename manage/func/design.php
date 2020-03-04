<?php

require_once 'sql.php';

$table_name = "design";

if ( isset($_POST['design']) ) {
  var_dump($_POST['design']);
  $max_id = select_max_id($table_name);
  var_dump($max_id);
  insert_design($max_id, $_POST['design']);
  header('Location: ./../views/design.php');
  exit;
}

if ( isset($_GET['del']) ) {
  delete($_GET['del'], $table_name);
  header('Location: ./../views/design.php');
  exit;
}

$design_list = select_user_all($table_name);



?>