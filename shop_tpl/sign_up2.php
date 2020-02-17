<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>新規登録　確認</title>
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
                    <form action="func_signup1.html" method="post">
                        <p>この内容でよろしいですか</p>
                        <table>
                            <tr>
                                <td>店舗名</td>
                                <td><?php echo $_POST['name']; ?></td>
                            </tr>
                            <tr>
                                <td>店舗住所</td>
                                <td><?php echo $_POST['address']; ?></td>
                            </tr>
                            <tr>
                                <td>電話番号</td>
                                <td><?php echo $_POST['tel']; ?></td>
                            </tr>
                            <tr>
                                <td>メールアドレス</td>
                                <td><?php echo $_POST['mail']; ?></td>
                            </tr>
                            <tr>
                                <td>パスワード</td>
                                <td><?php echo $_POST['pass']; ?></td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="戻る" ></td>
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
