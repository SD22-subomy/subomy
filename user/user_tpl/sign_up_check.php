<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>登録確認画面</title>
<link rel="stylesheet" href="#">
</head>
<body>
<div id="wrapper">

    <div id="header">
        <div class="center">
        </div>
    </div>

    <div id="content">
        <div class="center">
            <form action="#" method="POST">
                <table>
                    <tr>
                        <td>氏名:</td>
                        <td><?php echo $_SESSION['name'];?></td>
                    </tr>
                    <tr>
                        <td>電話番号:</td>
                        <td><?php echo $_SESSION['tel'];?></td>
                    </tr>
                    <tr>
                        <td>性別:</td>
                        <td>
                            <?php echo($_SESSION['gender'] == 0 ? '男':'女');?>
                        </td>
                    </tr>
                    <tr>
                        <td>メールアドレス:</td>
                        <td><?php echo $_SESSION['mail'];?></td>
                    </tr>
                    <tr>
                        <td>パスワード:</td>
                        <td><?php echo $_SESSION['pass'];?></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="back" value="戻る"></td>
                        <td><input type="submit" name="regist" value="登録"></td>
                    </tr>
                </table>
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