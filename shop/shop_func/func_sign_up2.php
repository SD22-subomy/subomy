<?php
session_start();
if(isset($_POST['next'])){
  header('Location:./sign_up3.php'); //次のページへ
}elseif(isset($_POST['back'])){
  header('Location:./sign_up1.php'); //前のページへ
}
$cnt = mb_strlen($_SESSION['pass'], 'UTF-8');
$pass = str_repeat('*',$cnt);
?>
