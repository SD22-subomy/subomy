<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>店舗情報</title>
        <link rel="stylesheet" href="../shop_css/shop_info.css">
        <script src="../../jquery-3.4.1.min.js"></script>
        <script src="../javascript/shop_info.js"></script> 
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <p><img src="../../image/gulunte_logo.png"></p>
                <form action="../func/shop_info.php" method="POST">
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
                    <div id="nav">
                        <ul>
                            <li id="intro" class="item">店舗基本情報</li>
                            <li id="info" class="item">店舗紹介文</li>
                            <li id="cour" class="item">コース情報</li>
                        </ul>    
                        <span id="shop_content"></span>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="center"></div>
            </div>
        </div>
    </body>
</html>