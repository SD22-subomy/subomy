<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>予約情報</title>
        <link rel="stylesheet" href="../shop_css/reservation.css">
        <script src="../../jquery-3.4.1.min.js"></script>
        <script src="../javascript/reservation.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <p><img src="../../image/gulunte_logo.png"></p>
                <form action="../func/mypage.php" method="POST">
                    <input type="submit" name="logout" value="ログアウト">
                </form>
            </div>
            <div id="content">
                <div id="left">
                    <div id="navi">
                        <ul>
                            <li><a href ="mypage.php">ホーム</a></li>
                            <li><a href="shop_info.php">店舗情報</a></li>
                            <li><a href="design.php">デザイン</a></li>
                            <li><a href="reservation.php">予約情報</a></li>
                            <li><a href="price.php">月額コース</a></li>
                            <li><a href="">設定</a></li>
                        </ul>
                    </div>
                </div>
                <div id="right">
                    <div id="r_header">
                        <form action="../func/reservation.php" method="POST">
                            <ul>
                                <li>
                                    <input type="hidden" name="prevDay" value="<?= $yesterday?>">                                   
                                    <input type="submit" name="prev" value="＜">
                                </li>
                                <li><?= $daies?></li>
                                <li>
                                    <input type="hidden" name="nextDay" value="<?= $yesterday?>">
                                    <input type="submit" name="next" value="＞">
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div id="createS">
                        <div class="s_header">
                        <?php
                            for($i=0;$i < count($times); $i++){
                                $time = $i % 2;
                                if($time == 0){
                        ?>
                            <div class="time"><?= $times[$i]?></div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <?= $html?>
                    </div>
                    <?= $msg?>
                </div>
            </div>
            <div id="footer">
                <div class="center"></div>
            </div>
        </div>
    </body>
</html>