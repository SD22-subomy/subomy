<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>新規会員確認画面</title>
<link rel="stylesheet" href="../user_css/sign_up.css">
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
                <table>
                    <tr>
                        <th>氏名</th>
                        <td><input type="text" name="name" value="<?php echo $name;?>"></td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td><input type="text" name="tel" value="<?php echo $tel;?>"></td>
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td>
                            <label><input type="radio" name="gender" value="0" <?php if(empty($gender) || $gender == 0){ echo 'checked';}?>>男</label>
                            <label><input type="radio" name="gender" value="1" <?php if($gender == 1){ echo 'checked';}?>>女</label>
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td><input type="text" name="mail" value="<?php echo $mail;?>"></td>
                    </tr>
                    <tr>
                        <th>パスワード</th>
                        <td><input type="text" name="pass"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" class="btn" name='send' value="確認"></td>
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