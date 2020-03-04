<?php
  require_once "./../func/shop.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>管理画面 | 店舗一覧</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../bootstrap/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./../css/common.css">
  <link rel="stylesheet" href="./../css/shop.css">
</head>
<body>

<div id="wrapper">

<h1>店舗一覧</h1>

<?php if (isset($shop_list)) { ?>
  <div class="container">
    <div class="table-responsive"> 
      <table class="table table-bordered text-nowrap table-hover">
        <thead class="thead-dark">
          <tr>
            <th>店舗ID</th><th>店舗名</th><th>店舗住所</th><th>電話番号</th><th>店舗メール</th><th>ログインID</th><th>パスワード</th><th>課金状況</th><th>削除</th>
          </tr>
        </thead>

        <?php foreach ($shop_list as $key => $value) { ?>

          <tbody>
            <tr>
            <td scope="row"><?php echo $value['shop_id']; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['addres']; ?></td>
            <td><?php echo $value['tel']; ?></td>
            <td><?php echo $value['mail']; ?></td>
            <td><?php echo $value['login_id']; ?></td>
            <td><?php echo $value['pass']; ?></td>
            <td><?php echo $value['monthly']; ?></td>
            <td><a type="button" class="btn btn-sm" href="?del=<?php echo $value['shop_id']; ?>">削除</a></td>
            </tr>
          </tbody>

        <?php } ?>
        
      </table>
    </div>
  </div>
<?php } else { ?>
  <p>該当する店舗はありません。</p>
<?php } ?>

<div><a href="./manage.php">メニュー画面へ戻る</a></div>

</div><!-- wrapper end -->
</body>
</html>