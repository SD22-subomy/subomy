<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン画面</title>
        <link rel="stylesheet" href="../shop_css/login.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div class="center">
                </div>
            </div>
            <div id="content">
                <div class="center">
                    <form action="../func/login.php" method="post">
                        <div id="login">
                            <div id="registration">
                                <p>登録をされていない方は<a href="../func/sign_up1.php">こちら</a></p>
                            </div>
                            <!--phpのエラーメッセージ出力場所-->
                            <!-- <?= $msg ?> -->
                            <table>
                                <tr>
                                    <td>ログインID:</td>
                                    <td><input type="text" name="id"></td>
                                </tr>
                                <tr>
                                    <td>パスワード:</td>
                                    <td><input type="password" name="pass"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="btn"><input type="submit" value="ログイン" name="login"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><a href="../func/reminder.php">ID、パスワードを紛失された方はこちら</a></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>

            <div id="footer">
                <div class="center"></div>
            </div>
        </div>
    </body>
</html>
