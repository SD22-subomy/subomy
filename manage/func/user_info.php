<?php

require_once 'sql.php';

$table_name = "user";

if ( isset($_GET['del']) ) {

  delete($_GET['del'], $table_name);

}


$user_list = select_user_all($table_name);



?>