<?php
  require_once './../func/user_info.php';
?>
<!DOCTYPE html>
<html lang="ja">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>管理者画面 | 利用者情報</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../bootstrap/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</head>


<body>

<h1>利用者情報</h1>

<?php if (isset($user_list)) { ?>
  <div class="container">
    <table class="table table-bordered text-nowrap table-hover">
      <thead class="thead-dark">
        <tr>
          <th>利用者ID</th><th>名前</th><th>性別</th><th>電話番号</th><th>メールアドレス</th><th>パスワード</th><th>削除</th><th>パスワード変更</th>
        </tr>
      </thead>

      <?php foreach ($user_list as $key => $value) { ?>

        <tbody>
          <tr>
          <td scope="row"><?php echo $value['user_id']; ?></td>
          <td><?php echo $value['name']; ?></td>
          <td><?php echo $value['gender']; ?></td>
          <td><?php echo $value['tel']; ?></td>
          <td><?php echo $value['mail']; ?></td>
          <td><?php echo $value['pass']; ?></td>
          <td><a type="button" class="btn btn-link btn-sm" href="?del=<?php echo $value['user_id']; ?>">削除</a></td>
          <td><a type="button" class="btn btn-link btn-sm" href="permute_pass.php?id=<?php echo $value['user_id']; ?>">変更</a></td>
          </tr>
        </tbody>

      <?php } ?>
    </table>
  </div>

<?php } else { ?>

  <p>該当する利用者はいません。</p>

<?php } ?>

<div><a href="./manage.php">メニュー画面へ戻る</a></div>

</body>


</html>