<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>条件登録ページ</title>
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
            <form action="" method="POST">
                <select name="prefectures">
                <option value="0">未選択</option>
                <option value="1">北海道</option>
                <option value="2">青森県</option>
                <option valie="3">岩手県</option>
                </select>

                <select name="genre">
                <option value="0">未選択</option>
                <option value="1">和風</option>
                <option value="2">洋風</option>
                <option valie="3">魚介・海鮮</option>
                </select>

                <select name="cuisine">
                <option value="0">未選択</option>
                <option value="1">寿司</option>
                <option value="2">焼肉</option>
                <option valie="3">ラーメン</option>
                </select>

                <select name="use_scene">
                <option value="0">未選択</option>
                <option value="1">宴会</option>
                <option value="2">接待</option>
                <option valie="3">デート</option>
                </select>

                <select name="commitment">
                <option value="0">未選択</option>
                <option value="1">食べ放題</option>
                <option value="2">飲み放題</option>
                <option valie="3">個室</option>
                </select>

                <input type="submit" name="send" value="登録">
                <input type="submit" name="back" value="マイページへ戻る">
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