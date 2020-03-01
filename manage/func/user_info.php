<?php

require_once 'sql.php';

$table_name = "user";

if ( isset($_GET['del']) ) {

  delete($_GET['del'], $table_name);
  header('Location: ./../views/user_info.php');
  exit;

}


$user_list = select_user_all($table_name);



?>