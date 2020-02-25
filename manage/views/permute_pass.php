<?php
  require_once "./../func/permute_pass.php";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>管理者画面 | パスワード変更</title>
</head>
<body>

<div>変更者:<?php echo $user['name']; ?></div>
<div>現在のパスワード:<?php echo $user['pass'];?></div>
<form action="" method="post">
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
  <input type="text" name="new_pass" >
  <input type="submit" name="permute" value="変更">
</form>
  
</body>
</html>