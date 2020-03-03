<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>店舗　デザイン</title>
        <link rel="stylesheet" href="../shop_css/design.css">
        <script src="../../jquery-3.4.1.min.js"></script>
        <script src="../javascript/design.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <p><img src="../../image/gulunte_logo.png"></p>
                <form action="../func/design.php" method="POST">
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
                    <form action="../func/design.php" method="POST">
                        <header class="sampleHeader">
                            現在のデザイン
                            <input type="submit" name="change" value="変更">
                        </header>
                        <div id="main">
                            <div id="scroll">
                                <header><?=$shop['name']?></header>
                                <div id="info">
                                    <ul>
                                        <li>TOP</li>
                                        <li>写真</li>
                                        <li>メニュー</li>
                                        <li>地図</li>
                                    </ul>
                                </div>
                                <div class="img">
                                    <img src="../../shop_img/<?=$course_img['shop_id']?>/<?=$course_img['img']?>" alt="store_image">
                                </div>
                                <div class="introduction">
                                    <p class="cTop">お店の紹介文　お店のアピールポイント</p>
                                    <div class="intro">
                                        <?php
                                            for($i=0;$i<$cnt;$i++){
                                        ?>
                                            <div class="introContent">
                                                <p>■<?=$info[$i]['title']?></p>
                                                <p><?=$info[$i]['info']?></p>
                                            </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <hr>
                                    <div id="shop_info">
                                        <p class="what">店舗基本情報</p>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>店名</td>
                                                    <td><?= $shop['name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>ジャンル</td>
                                                    <td><?= $shop['genre']?></td>
                                                </tr>
                                                <tr>
                                                    <td>予約・お問合わせ</td>
                                                    <td><?= $shop['tel']?></td>
                                                </tr>
                                                <tr>
                                                    <td>住所</td>
                                                    <td><?= $shop['addres']?></td>
                                                </tr>
                                                <tr>
                                                    <td>交通手段</td>
                                                    <td><?= $shop['access']?></td>
                                                </tr>
                                                <tr>
                                                    <td>営業時間・定休日</td>
                                                    <td>
                                                        <?= $shop['shop_time']?><br>
                                                        定休日:<?=$shop['holiday']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ホームページ</td>
                                                    <td>▶<?= $shop['url']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <footer>
                                    <ul>
                                    <li>サイトマップ</li>
                                    <li>キーワード一覧</li>
                                    <li>ヘルプ・お問合わせ</li>
                                    <li>プレミアムサービス</li>
                                    <li>個人情報保護方針</li>
                                    <li>利用契約</li>
                                    <li>企業情報</li>
                                    <li>採用情報</li>
                                    </ul>
                                    <p>Copyright (C) Hal Event Week, Inc All Rights Reserved</p>
                                </footer>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="footer">
                <div class="center"></div>
            </div>
        </div>
    </body>
</html>