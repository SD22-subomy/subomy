<?php
if(!empty($_POST['name']) && !empty($_POST['addreas']) && !empty($_POST['tel']) && !empty($_POST['mail']) && !empty($_POST['pass'])){

// ランダムで店IDを作成
  function random($login_id = 4)
  {
      return substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, $login_id);
  }

  $cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($cn,'utf8');
  $sql = "SELECT MAX(id) FROM shop";
  $result = mysqli_query($cn,$sql);
  $row = mysqli_fetch_assoc($result);
  $id = $row['MAX(id)'] + 1;

  $sql = 'INSERT INTO comic VALUES("'.$_POST['name'].'","'.$_POST['address'].'","'.$_POST['tel'].'","'.$_POST['mail'].'","'.$login_id.'","'.$_POST['pass'].'",0);';
  mysqli_query($cn,$sql);


  mysqli_close($cn);
  exit;

  }
?>
