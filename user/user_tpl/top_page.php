<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>TOPページ</title>
<link rel="stylesheet" href="./user_css/top_page.css">
<link rel="stylesheet" href="./user_css/main.css">
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
            <div class="section">
            <h2>ジャンル</h2>
            <ul>
                <li>和風</li>
                <li>洋風</li>
                <li>魚介・海鮮</li>
                <li>イタリアン</li>
                <li>中華</li>
                <li>韓国</li>
                <li>居酒屋</li>
                <li>スペイン</li>
                <li>カフェ</li>
                <li>フレンチ</li>
                <li>バー・お酒</li>
            </ul>
            </div>
        </div>
    </div>

    <div id="footer">
        <div class="center">
        </div>
    </div>

</div>
</body>
</html>