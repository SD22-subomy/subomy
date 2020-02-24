<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>新規登録</title>
        <link rel="stylesheet" href="../shop_css/sign_up1.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div class="center">
                </div>
            </div>
            <div id="content">
                <div class="center">
                    <h2>新規登録</h2>
                    <div id="nav">
                        <ul id="navi">
                            <li>入力</li>
                            <li>確認</li>
                            <li class="color">完了</li>
                        </ul>
                    </div>
                    <div id="commnt">
                        <p>
                            店舗番号は<span class="font"><?= $data['login_id'] ?></span>です<br>
                            これはログインIDとして使われます。忘れないようにしてください。
                        </p>
                        <p><a href="login.php">ログイン画面</a></p>
                    </div>
                </div>
            </div>

            <div id="footer">
                <div class="center"></div>
            </div>
        </div>
    </body>
</html>