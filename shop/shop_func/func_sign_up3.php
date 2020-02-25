<?php
session_start();
$id = substr(bin2hex(random_bytes(7)),0,7);
//DB登録
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');
$sql = 'INSERT INTO shop (name,addres,tel,mall,login_id,pass) VALUES("'.$_SESSION['name'].'","'.$_SESSION['address'].'","'.$_SESSION['tel'].'","'.$_SESSION['mail'].'","'.$id.'","'.$_SESSION['pass'].'");';
mysqli_query($cn,$sql);
mysqli_close($cn);

?>
