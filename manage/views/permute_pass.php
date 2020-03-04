<?php
  require_once "./../func/permute_pass.php";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>管理者画面 | パスワード変更</title>
  
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../bootstrap/jquery-3.4.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./../css/common.css">
  <link rel="stylesheet" href="./../css/permute_pass.css">
  <script src="./../js/vue.js"></script>
</head>
<body>
<div id="wrapper">
<div id="app-6">
  <div>変更者:<?php echo $user['name']; ?></div>
  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered text-nowrap table-hover">
        <thead class="thead-dark">
          <tr><th>変更前</th><th>変更後</th></tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row"><?php echo $user['pass'];?></td>
            <td>{{ message }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input v-model="message" type="text" name="new_pass" >
    
    <input type="submit" name="permute" value="変更">
  </form>
</div>

</div><!-- wrapper end -->
<script src="./../js/permute_pass.js"></script>
</body>
</html>