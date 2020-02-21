<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <title>管理画面 | 予約一覧</title>
</head>
<body>
 
<?php if (isset($row_list)) { ?>
  <table>
    <thead><tr><th>予約ID</th><th>利用者ID</th><th>店舗ID</th><th>来店日</th><th>来店時間</th><th>来店人数</th></tr></thead>

    <?php foreach ($row_list as $key => $value) { ?>

      <tbody>
        <tr>
        <td><?php echo $value['reser_id']; ?></td>
        <td><?php echo $value['user_id']; ?></td>
        <td><?php echo $value['shop_id']; ?></td>
        <td><?php echo $value['reser_date']; ?></td>
        <td><?php echo $value['reser_time']; ?></td>
        <td><?php echo $value['reser_many']; ?></td>
        </tr>
      </tbody>

    <?php } ?>

  </table>
<?php } ?>


</body>
</html>