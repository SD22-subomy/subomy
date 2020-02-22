<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>店舗詳細ページ</title>
<link rel="stylesheet" href="./../user_css/calendar.css">
<link rel="stylesheet" href="./../user_css/shop_info.css">
<link rel="stylesheet" href="./../user_css/main.css">
</head>
<body>
<div id="wrapper">

    <div id="header">
        <div class="center">
        </div>
    </div>

    <form action="./reserve.php" method="get">
    <div id="content">
        <div class="center">
            <ul>
                <li><?php echo $shop_info['name'];?></li>
                <li><?php echo $shop_info['address'];?></li>
                <li><?php echo $shop_info['tel'];?></li>
            </ul>
            <table border="1">
                <tr>
                    <td>コース名</td>
                    <td>料金</td>
                    <td>備考</td>
                </tr>
                <?php foreach($course_list as $v){?>
                <tr>
                    <td><?php echo $v['name'];?></td>
                    <td><?php echo $v['price'];?></td>
                    <td><?php echo $v['other'];?></td>
                </tr>
                <?php }?>
            </table>

            <div id="calendar_form">
            <ul>
            <li><button id="prev" type="button">＜</button></li>
            <li><div id="calendar"></div></li>
            <li><button id="next" type="button">＞</button></li>
            </ul>
            </div>

            <div id="hidden_date"></div>
            <input type="hidden" name="id" value="<?php echo $shop_info['id'];?>">
            <input type="submit" name="reserve" value="予約">
        </div>
    </div>
    </form>

    <div id="footer">
        <div class="center">
        </div>
    </div>

</div>
<script src="./../user_js/calendar.js"></script>
</body>
</html>