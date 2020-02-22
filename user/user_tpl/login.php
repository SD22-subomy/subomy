<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ログイン画面</title>
<link rel="stylesheet" href="../user_css/login.css">
</head>
<body>
<div id="wrapper">

    <div id="header">
        <div class="center">
        </div>
    </div>

    <div id="content">
        <div class="center">
            <form action="" method="POST">
                <div id="registration">
                    <p>アカウントをお持ちでない方はこちら</p>
                    <a href="./sign_up.php">新規会員登録</a>
                </div>
                <div id="login">
                    <h2>ログイン</h2>
                    <p class="err">IDまたはパスワードが違います。</p>
                    <div class="input">
                        <input type="text" name="mail" value="" placeholder="メールアドレス">
                    </div>
                    <div class="input">
                        <input type="password" name="password" placeholder="パスワード">
                    </div>
                    <input type="submit" class="btn" name='login' value="ログイン">                    <p><a href="#">パスワードをお忘れの方はこちら</a></p>
                </div>
                <!-- <p>登録をされていない方は<a href="./sign_up.php">こちら</a></p>
                <table>
                    <tr>
                        <td>メールアドレス:</td>
                        <td><input type="text" name="mail"></td>
                    </tr>
                    <tr>
                        <td>パスワード:</td>
                        <td><input type="password" name="pass"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name='login' value="ログイン"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="#">ID、パスワードを紛失された方はこちら</a></td>
                    </tr>
                </table> -->
            </form>
        </div>
    </div>

    <div id="footer">
        <div class="center">
        </div>
    </div>

</div>
</body>
</html>