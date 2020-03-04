<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>店舗　マイページ</title>
        <link rel="stylesheet" href="../shop_css/mypage.css">
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
                    <h3 class="rHeader">日本全国繁盛店<span class="small">なぜあの店は繁盛しているのか？人気の秘密</span></h3>
                    <div class="content">
                        <div class="rContent">
                            <img src="../img/20200302191225571.jpg">
                            <h3>滋賀の地域活性化を目指して出店。肉メニューやイ...</h3>
                        </div>
                        <div class="rContent">
                            <img src="../img/20200218132632183.jpg">
                            <h3>トレンドメニューをそろえ、女性を中心に幅広く...</h3>
                        </div>
                        <div class="rContent">
                            <img src="../img/20200225094617448.jpg">
                            <h3>様々なシーンに対応する個室を備え、厳選素材を使...</h3>
                        </div>
                        <div class="rContent">
                            <img src="../img/20200213200208772.jpg">
                            <h3>高級感のある和の個室と会席料理で接待利用を獲得</h3>
                        </div>
                    </div>
                    <h3 class=rHeader>おすすめ経営ノウハウ<span class="small">今日から使える！最新のお役立ち情報をお届け</span></h3>
                    <div class="content">
                        <div class="rContent">
                            <img src="../img/20200227160920719.jpg">
                            <h3>店長がいない店、調理をしない店は、必ず滅びる</h3>
                        </div>
                        <div class="rContent">
                            <img src="../img/20200217151852948.jpg">
                            <h3>（後編）タイ発　伝統の大衆料理「ガパオ」が大変身</h3>
                        </div>
                        <div class="rContent">
                            <img src="../img/20200218145648005.jpg">
                            <h3>【後編】注目シェフ クローズアップ　料理界の若き...</h3>
                        </div>
                        <div class="rContent">
                            <img src="../img/20200123102914108.jpg">
                            <h3>【前編】注目シェフ 【PR】【ネスカフェ リ...</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="center"></div>
            </div>
        </div>
    </body>
</html>