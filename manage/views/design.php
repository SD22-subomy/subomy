<?php
  require_once './../func/design.php';
?>
<!DOCTYPE html>
<html lang="ja">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>管理者画面 | デザイン情報</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../bootstrap/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>


<body>

<h1>デザイン情報</h1>

<?php if (isset($design_list)) { ?>
  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered text-nowrap table-hover">
        <thead class="thead-dark">
          <tr>
            <th>デザインID</th><th>デザイン</th><th>削除</th>
          </tr>
        </thead>

        <?php foreach ($design_list as $key => $value) { ?>

          <tbody>
            <tr>
              <td scope="row"><?php echo $value['design_id']; ?></td>
              <td><?php echo $value['design']; ?></td>
              <td><a type="button" class="btn btn-sm" href="?del=<?php echo $value['design_id']; ?>">削除</a></td>
            </tr>
          </tbody>

        <?php } ?>
      </table>
    </div>
  </div>

<?php } else { ?>

  <p>該当するデザインはありません。</p>

<?php } ?>

<div><a href="./design_add.php">デザインを追加する</a></div>
<div><a href="./manage.php">メニュー画面へ戻る</a></div>

</body>


</html>