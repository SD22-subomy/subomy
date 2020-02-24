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
                    <form action="../func/sign_up2.php" method="POST">
                        <p class="keikoku">この内容でよろしいですか</p>
                        <table>
                            <tr>
                                <th>店舗名</th>
                                <td><?= $name ?></td>
                            </tr>
                            <tr>
                                <th>店舗住所</th>
                                <td><?= $address ?></td>
                            </tr>
                            <tr>
                                <th>電話番号</th>
                                <td><?= $tel ?></td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td><?= $mail ?></td>
                            </tr>
                            <tr>
                                <th>パスワード</th>
                                <td><?= $pass ?></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="back" value="戻る" ></td>
                                <td><input type="submit" name="next" value="次へ"></td>
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
