<!DOCTYPE html>
<html lang="ja">


<head>
  <meta charset="UTF-8">
  <title>管理者画面 | 利用者情報</title>
</head>


<body>


<?php if (isset($row_list)) { ?>
  <table>
    <thead><tr><th>利用者ID</th><th>名前</th><th>性別</th><th>電話番号</th><th>メールアドレス</th><th>パスワード</th></tr></thead>

    <?php foreach ($row_list as $key => $value) { ?>

      <tbody>
        <tr>
        <td><?php echo $value['user_id']; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['gender']; ?></td>
        <td><?php echo $value['tel']; ?></td>
        <td><?php echo $value['mail']; ?></td>
        <td><?php echo $value['pass']; ?></td>
        </tr>
      </tbody>

    <?php } ?>

  </table>
<?php } ?>



</body>


</html>