<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>マイページ</title>
</head>
<link rel="stylesheet" href="./../user_css/monthly.css">
<link rel="stylesheet" href="./../user_css/main.css">
<link rel="stylesheet" href="./../user_css/schedule.css">
<link rel="stylesheet" href="./../user_css/mypage.css">
<link rel="stylesheet" href="./../user_css/modaal.min.css">
<script src="./../../jquery-3.4.1.min.js"></script>
<script src="./../user_js/monthly.js"></script>
<script src="./../user_js/modaal.min.js"></script>
<!-- <script src="./../user_js/event.js"></script> -->
<script>
var Events = {
"monthly": [
<?php foreach($event as $v){ ?>
{
"id": <?php echo $v['id'];?>,
"name": "<?php echo $v['time'];?>",
"startdate": "<?php echo $v['date'];?>",
"enddate": "",
"color": "#53c3db",
"shop_name": "<?php echo $v['shop_name'];?>",
"many": "<?php echo $v['many'];?>",
},
<?php }?>
]
};

window.onload = function(){

$('#mycalendar').monthly({
mode: 'event',
dataType: 'json',
events: Events,
eventList:true
});

};

document.addEventListener("click", function(e) {
    if(e.target.classList.contains("monthly-event-indicator")) {
        console.log('ok');
        console.log(e.target.dataset.eventid);
        $('.modal').modaal();
    }
    if(e.target.classList.contains("eventClick")) {
        console.log('ok');
        console.log(e.target.dataset.eventid);
    }
})
</script>
<body>
<div id="wrapper">

    <header>
        <p><a href="../index.php"><img src="./../image/gulunte.png" width="300" alt="logo"></a></p>
    </header>

    <div id="main">
        <form action="" method="POST">
        <h2><?php echo $user['name'];?>さん のマイページ</h2>

        <ul>
            <li>▼<a href="./condition.php">条件登録</a></li>
<!--             <li><a href="./schedule.php">予約確認</a></li> -->
            <li>▼<a href="#">会員情報設定</a></li>
        </ul>

        <div class="monthly" id="mycalendar"></div>
        <div id="modal" style="display:none;">
        <p>これはサンプルです。</p>
        </div>
        </form>
    </div>

    <div id="footer">
        <div class="center">
        </div>
    </div>

</div>
</body>
</html>