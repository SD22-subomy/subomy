<?php

require_once 'sql.php';

if ( isset($_GET['del']) ) {
  delete($_GET['del'], $_GET['cate']);
  var_dump($_GET['cate']);
}

$table_name = "user";
$user_list = select_user_all($table_name);



?>