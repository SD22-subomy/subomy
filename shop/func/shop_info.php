<?php
//////////////////////////////////////
require 'func.php';//関数呼び出し
require '../../config.php';

/////////////////////////////////////
session_start();
$shop_id = $_SESSION['shop_id'];
if(isset($_POST['logout'])){
    session_destroy();
    header('Location:login.php');
}

require '../shop_tpl/shop_info.php';

?>