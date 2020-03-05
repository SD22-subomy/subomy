<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>店舗　デザイン</title>
        <link rel="stylesheet" href="../shop_css/price.css">
        <script src="../../jquery-3.4.1.min.js"></script>
        <!-- <script src="../javascript/mypage.js"></script> -->
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
                    <div class="price">
                        <label>
                            <input type="radio" name="month" value="0" checked>
                            <h3>無料プラン</h3>
                            <p>無料</p>
                            <p>無料で使えるフレーム4種類のみ</p>
                            <p class="red"><?=$msg1?></p>
                        </label>
                    </div>
                    <div class="price">
                        <label>
                            <input type="radio" name="month" value="<?=$row['mon_id']?>">
                            <h3><?=$row['name']?></h3>
                            <p><?=$row['monthly']?></p>
                            <p><?=$row['description']?></p>
                            <p class="red"><?=$msg2?></p>
                        </label>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="center"></div>
            </div>
        </div>
    </body>
</html>