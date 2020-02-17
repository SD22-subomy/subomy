<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>新規登録</title>
        <link rel="stylesheet" href="css/S_login.css">
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
                    <div id="navi">
                        <ul>
                            <li>入力</li>
                            <li>確認</li>
                            <li>完了</li>
                        </ul>
                    </div>
                    <form action="sign_up2.php" method="post">
                        <p>全ての項目は必須です</p>
                        <table>
                            <tr>
                                <td>店舗名</td>
                                <td><input type="text" name="name"></td>
                            </tr>
                            <tr>
                                <td>店舗住所</td>
                                <td><input type="text" name="address"></td>
                            </tr>
                            <tr>
                                <td>電話番号</td>
                                <td><input type="text" name="tel"></td>
                            </tr>
                            <tr>
                                <td>メールアドレス</td>
                                <td><input type="email" name="mail"></td>
                            </tr>
                            <tr>
                                <td>パスワード</td>
                                <td><input type="password" name="pass"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="次へ"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>

            <div id="footer">
                <div class="center"></div>
            </div>
        </div>
    </body>
</html>
