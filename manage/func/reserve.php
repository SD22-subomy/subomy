<?php

require_once 'sql.php';

$table_name = 'reservation';

if ( isset($_GET['del']) ) {
  delete($_GET['del'], $table_name);
  header('Location: ./../views/reserve.php');
  exit;
}

$reser_list = select_user_all($table_name);
?>