<?php
  require_once './../func/design.php';
?>
<!DOCTYPE html>
<html lang="ja">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理者画面 | デザイン追加</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../bootstrap/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./../css/common.css">
  <link rel="stylesheet" href="./../css/design_add.css">
</head>


<body>
<div id="wrapper">
  <h1>デザインの追加</h1>
  <form action="" method="post">
    <input type="text" name="design" value="">
    <input type="submit" name="design_btn" value="追加">
  </form>
  <div><a href="./design.php">キャンセル</a></div>
</div><!-- wrapper end -->
</body>
</html>