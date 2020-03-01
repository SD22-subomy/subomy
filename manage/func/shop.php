<?php

require_once 'sql.php';

$table_name = "shop";

if ( isset($_GET['del']) ) {
  delete($_GET['del'], $table_name);
  // header('Location: ./../views/shop.php');
  // exit;
}

$shop_list = select_user_all($table_name);


?>