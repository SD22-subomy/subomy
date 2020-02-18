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
                            <li class="color">入力</li>
                            <li>確認</li>
                            <li>完了</li>
                        </ul>
                    </div>
                    <form action="../func/sign_up1.php" method="post">
                        <p class="keikoku">全ての項目は必須です</p>
                        <table>
                            <tr>
                                <th>店舗名</th>
                                <td>
                                    <input type="text" name="name" value= "<?php if (!empty($_POST['name'])) {print$_POST['name'];} ?>"><br>
                                    <span class = "err"><?= $msg[0] ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th>店舗住所</th>
                                <td>
                                    <textarea wrap="soft" name="address"><?php if (!empty($_POST['address'])) {print$_POST['address'];} ?></textarea><br>
                                    <span class = "err"><?= $msg[1] ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th>電話番号</th>
                                <td>
                                    <input type="text" name="tel" value= "<?php if (!empty($_POST['tel'])) {print$_POST['tel'];} ?>"><br>
                                    <span class = "err"><?= $msg[2] ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td>
                                    <input type="text" name="mail" value= "<?php if (!empty($_POST['mail'])) {print$_POST['mail'];} ?>"><br>
                                    <span class = "err"><?= $msg[3] ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th>パスワード</th>
                                <td>
                                    <input type="password" name="pass"><br>
                                    <span class = "err"><?= $msg[4] ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="次へ" name="next"></td>
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
