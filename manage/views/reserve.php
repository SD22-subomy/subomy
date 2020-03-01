<?php
  require_once './../func/reserve.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>管理画面 | 予約一覧</title>
 <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <script src="../bootstrap/jquery-3.4.1.min.js"></script>
 <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<h1>予約一覧</h1>

<?php if (isset($reser_list)) { ?>
  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered text-nowrap table-hover">
        <thead class="thead-dark">
          <tr>
            <th>予約ID</th><th>利用者ID</th><th>店舗ID</th><th>来店日</th><th>来店時間</th><th>来店人数</th><th>削除</th>
          </tr>
        </thead>

        <?php foreach ($reser_list as $key => $value) { ?>

          <tbody>
            <tr>
            <td scope="row"><?php echo $value['reser_id']; ?></td>
            <td><?php echo $value['user_id']; ?></td>
            <td><?php echo $value['shop_id']; ?></td>
            <td><?php echo $value['reser_date']; ?></td>
            <td><?php echo $value['reser_time']; ?></td>
            <td><?php echo $value['reser_many']; ?></td>
            <td><a type="button" class="btn btn-link btn-sm" href="?del=<?php echo $value['shop_id']; ?>">削除</a></td>
            </tr>
          </tbody>

        <?php } ?>

      </table>
    </div>
  </div>
<?php } else { ?>
  <p>該当する予約はありません。</p>
<?php } ?>

<div><a href="./manage.php">メニュー画面へ戻る</a></div>

</body>
</html>