<?php
  require_once "./../func/shop.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>管理画面 | 店舗一覧</title>
</head>
<body>
 
<?php if (isset($shop_list)) { ?>

  <table>
    <tbody><tr><th>店舗ID</th><th>店舗名</th><th>店舗住所</th><th>電話番号</th><th>店舗メール</th><th>ログインID</th><th>パスワード</th><th>課金状況</th></tr></tbody>

    <?php foreach ($shop_list as $key => $value) { ?>

      <tbody>
        <tr>
        <td><?php echo $value['shop_id']; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['address']; ?></td>
        <td><?php echo $value['tel']; ?></td>
        <td><?php echo $value['mail']; ?></td>
        <td><?php echo $value['login_id']; ?></td>
        <td><?php echo $value['pass']; ?></td>
        <td><?php echo $value['monthly']; ?></td>
        </tr>
      </tbody>

    <?php } ?>
    
  </table>
<?php } ?>


</body>
</html>