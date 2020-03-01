<?php
/////////////////////////////////////////
require 'func.php';//関数呼び出し
require '../../config.php';
/////////////////////////////////////////
$pageCnt = 0;
session_start();
$id = $_SESSION['shop_id'];
//曜日
$weeks = ['日', '月', '火', '水', '木', '金', '土'];
//時間
$times = ['17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30'];
//今日の日付
$year = date('Y');
$month = date('n');
$day = date('j');
$week = date('w');
$eMonth = date('d', mktime(0, 0, 0, $month + 1, 0, $year));
// $daies = date('Y-m-d');

// var_dump($daies);

if(isset($_POST['prev'])){
    $date = $_POST['prevDay'];
    $mozi = [];
    $mozi = preg_split("/[(\s.\/:)-]/",$date);
    $year = $mozi[0];
    $month = $mozi[1];
    $day = $mozi[2];
    $week = $mozi[3];

    $day = $day - 1;
    $week = $week -1;
    if($day < 1){
        $month = $month - 1;
        if($month < 1){
            $month = 12;
        }
        $eMonth = date('d', mktime(0, 0, 0, $month + 1, 0, $year));
        // var_dump($eMonth);
        $day = $eMonth;
    }
    if($week < 0){
        $week = 6;
    }
}
if(isset($_POST['next'])){
    $date = $_POST['nextDay'];
    $mozi = [];
    $mozi = preg_split("/[(\s.\/:)-]/",$date);
    $year = $mozi[0];
    $month = $mozi[1];
    $day = $mozi[2];
    $week = $mozi[3];

    $day = $day + 1; 
    $week = $week + 1;
    if($day > $eMonth){
        $eMonth = date('d', mktime(0, 0, 0, $month + 2, 0, $year));
        // var_dump($eMonth);
        $day = 1;
        $month = $month + 1;
    }
    if($month > 12){
        $month = 1;
    }
    if($week > 6){
        $week = 0;
    }
}


$reser_time = $year.'-'.$month.'-'.$day;
$daies = $year.'/'.$month.'/'.$day.'('.$weeks[$week].')';
$yesterday = $year.'/'.$month.'/'.$day.'/'.$week;


//データベース接続
$cn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($cn,'utf8');

//配列
$col = ['user_id','user_id',"",""];
$table = ['reservation','user',""];

//SQL文
$sql = inner_sql2($table,$col,$id,"reservation.shop_id","reser_date",$reser_time);
// $sql = sql_info('reservation','shop_id',$id);
// var_dump($sql);
$result = shop_select($cn,$sql);
//SQL取得
$tbl = [];
$cnt = 0;
$html = "";
while ($row = mysqli_fetch_assoc($result)) {
    $tbl[] = $row;
    $cnt++;
}
if(count($tbl) == 0){
    $msg = "<p class='msg'>予約者なし</p>";
}
else{
    $msg = "";
}
// var_dump(count($tbl));
for($i=0;$i < count($tbl);$i++){
    $html = $html."<div class='schedule'>";
    for($a=0;$a < count($times);$a++){
        if($tbl[$i]['reser_time'] == $times[$a]){
            $html = $html."<div class='reser'>";
            $html = $html.$tbl[$i]['name']."様<br>".$tbl[$i]['reser_many']."名";
            $html = $html."</div>";
            $a = $a + 3;
        }else{
            $html = $html."<div class='none'></div>";
        }
    }
    $html = $html."</div>";
}


require '../shop_tpl/reservation.php';

?>