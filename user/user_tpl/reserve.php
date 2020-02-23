<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>予約ページ</title>
<link rel="stylesheet" href="./../user_css/calendar.css">
<link rel="stylesheet" href="./../user_css/reserve.css">
<link rel="stylesheet" href="./../user_css/main.css">
</head>
<body>
<div id="wrapper">

    <div id="header">
        <div class="center">
        </div>
    </div>

    <form action="" method="get">
    <div id="content">
        <div class="center">

            <p>人数：
            <select name="number">
            <option value="1">1名</option>
            <option value="2">2名</option>
            <option value="3">3名</option>
            <option value="4">4名</option>
            <option value="5">5名</option>
            <option value="6">6名</option>
            <option value="7">7名</option>
            <option value="8">8名</option>
            <option value="9">9名</option>
            </select>
            </p>

            <div id="calendar_form">
            <ul>
            <li><button id="prev" type="button">＜</button></li>
            <li><div id="calendar"></div></li>
            <li><button id="next" type="button">＞</button></li>
            </ul>
            </div>

            <p>時間：
            <select name="time">
            <option value="18:00">18:00</option>
            <option value="18:30">18:30</option>
            <option value="19:00">19:00</option>
            <option value="19:30">19:30</option>
            <option value="20:00">20:00</option>
            <option value="20:30">20:30</option>
            <option value="21:00">21:00</option>
            </select>
            </p>

            <p>コース名：
            <select name="course">
            <option value="0">選択なし</option>
            <?php foreach($course_list as $v){?>
            <option value="<?php echo $v['course_id'];?>"><?php echo $v['name'];?>/<?php echo $v['price'];?>/<?php echo $v['other'];?></option>
            <?php }?>
            </select>
            </p>
            <input type="hidden" name="id" value="<?php echo $shop_id;?>">
            <input type="submit" name="check" value="確認">

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