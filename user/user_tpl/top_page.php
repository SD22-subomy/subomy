<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>TOPページ</title>
<link rel="stylesheet" href="#">
</head>
<body>
<div id="wrapper">
<form action="" method="POST">
    <div id="header">
        <?php if($login_flg){?>
        <div>
            <ul>
            <li><a href="./controller/my_page.php">マイページ</a></li>
            <li><input type="submit" name="logout" value="ログアウト"></li>
            </ul>
        </div>
        <?php }else{?>
        <div>
            <ul>
            <li><a href="./controller/sign_up.php">新規会員登録</a></li>
            <li><a href="./controller/login.php">ログイン</a></li>
            </ul>
        </div>
        <?php }?>
    </div>
</form>
    <div id="content">
        <div class="center">

        </div>
    </div>

    <div id="footer">
        <div class="center">
        </div>
    </div>

</div>
</body>
</html>