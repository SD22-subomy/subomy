<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>予約確認</title>
<link rel="stylesheet" href="./../user_css/monthly.css">
<link rel="stylesheet" href="./../user_css/main.css">
<link rel="stylesheet" href="./../user_css/schedule.css">
<link rel="stylesheet" href="./../user_css/mypage.css">
<script src="./../../jquery-3.4.1.min.js"></script>
<script src="./../user_js/monthly.js"></script>
<!-- <script src="./../user_js/event.js"></script> -->
<script>
var Events = {
"monthly": [
<?php foreach($event as $v){?>
{
"id": <?php echo $v['id'];?>,
"name": "<?php echo $v['time'];?>",
"startdate": "<?php echo $v['date'];?>",
"enddate": "",
"color": "#53c3db"
},
<?php }?>
]
};

window.onload = function(){

$('#mycalendar').monthly({
mode: 'event',
dataType: 'json',
events: Events,
eventList:false
});

};

document.addEventListener("click", function(e) {
    if(e.target.classList.contains("monthly-event-indicator")) {
        console.log('ok');
        console.log(e.target.dataset.eventid);
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
    <form action="" method="POST">
    <div id="content">
        <div class="center">
            <div class="box">
                <div class="monthly" id="mycalendar"></div>
            </div>
        </div>
    </div>
    <input type="submit" name="back" value="戻る">
    </form>

    <div id="footer">
        <div class="center">
        </div>
    </div>


</div>

</body>
</html>