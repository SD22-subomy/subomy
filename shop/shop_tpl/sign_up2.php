<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>新規登録　確認</title>
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
                            <li class="color">確認</li>
                            <li>完了</li>
                        </ul>
                    </div>
<<<<<<< HEAD:shop/shop_tpl/sign_up2.html
                    <form action="" method="">
                        <p class="keikoku">全ての項目は必須です</p>
                        <table>
                            <tr>
                                <th>店舗名</th>
                                <td><input type="text" name=""></td>
                            </tr>
                            <tr>
                                <th>店舗住所</th>
                                <td><textarea wrap="soft" name=""></textarea></td>
                            </tr>
                            <tr>
                                <th>電話番号</th>
                                <td><input type="text" name=""></td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td><input type="text" name=""></td>
                            </tr>
                            <tr>
                                <th>パスワード</th>
                                <td><input type="password" maxLength="" name=""></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="次へ"></td>
=======
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
>>>>>>> 8f9e74beec9d527dd404588496e4a5f59fc429bf:shop/shop_tpl/sign_up2.php
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
