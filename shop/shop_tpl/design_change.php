<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>店舗　デザイン</title>
        <link rel="stylesheet" href="../shop_css/design_change.css">
        <script src="../../jquery-3.4.1.min.js"></script>
        <script src="../javascript/imageselect.js"></script>
        <script src="../javascript/design_change.js"></script>
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
                    <div id="sLift">
                        <div id="color">
                            <p>背景色</p>
                                <select id="clorfulSelect">
                            <?php
                                for($i=0;$i<$codeCnt;$i++){
                                    if($i == 0){
                            ?>
                            <option value="<?= $code[$i]['code1']?>,<?= $code[$i]['code2']?>,<?= $code[$i]['color_id']?>" selected><?=$code[$i]['color_name']?></option>
                            <?php
                                }else{
                            ?>
                            <option value="<?= $code[$i]['code1']?>,<?= $code[$i]['code2']?>,<?= $code[$i]['color_id']?>"><?=$code[$i]['color_name']?></option>
                            <?php
                                    }
                                }
                            ?>
                            </select>
                        </div>
                        <p id="designHeader">デザイン</p>
                        <div id="design">
                            <label class="check" id="radio1">
                                <input type="radio" name="selectDesign" value="" checked>
                                選択なし
                            </label>
                            <?php
                                for($i=1;$i<$cnt;$i++){
                            ?>
                            <label>
                                <input type="radio" name="selectDesign" value="<?=$tbl[$i]['design']?>">
                                <img src="../../design/<?= $tbl[$i]['design']?>">
                            </label>
                            <?php
                                }
                            ?>
                        </div>
                        <form action="../func/design_change.php" method="POST">
                            <input type="hidden" name="color_id" id="color_id" value="1">
                            <input type="hidden" name="design_id" id="design_id" value="0">
                            <input type="submit" name="designChange" value="変更">
                        </form>
                    </div>
                    <div id="sample">
                        <header class="sampleHeader">サンプル</header>
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
                                <div class="right">
                                    <form>
                                        <section class="calender">
                                        <p>来店日
                                            <input type="date" name="date" id="today">
                                        </p>
                                        </section>

                                        <section>
                                        <p>人数
                                            <select name="num">
                                            <option value="1"><?php echo "〇"; ?>１名</option>
                                            <option value="2"><?php echo "〇"; ?>２名</option>
                                            <option value="3"><?php echo "〇"; ?>３名</option>
                                            <option value="4"><?php echo "〇"; ?>４名</option>
                                            <option value="5"><?php echo "〇"; ?>５名</option>
                                            <option value="6"><?php echo "〇"; ?>６名</option>
                                            <option value="7"><?php echo "〇"; ?>７名</option>
                                            <option value="8"><?php echo "〇"; ?>８名</option>
                                            <option value="9"><?php echo "〇"; ?>９名</option>
                                            <option value="10"><?php echo "〇"; ?>１０名</option>
                                            <option value="11"><?php echo "〇"; ?>１１名</option>
                                            <option value="12"><?php echo "〇"; ?>１２名</option>
                                            <option value="13"><?php echo "〇"; ?>１３名</option>
                                            <option value="14"><?php echo "〇"; ?>１４名</option>
                                            <option value="15"><?php echo "〇"; ?>１５名</option>
                                            </select>
                                        </p>
                                        </section>

                                        <section>
                                        <p>時間
                                            <select name="time">
                                            <option value="18:00"><?php echo "〇"; ?>18:00</option>
                                            <option value="18:30"><?php echo "〇"; ?>18:30</option>
                                            <option value="19:00"><?php echo "〇"; ?>19:00</option>
                                            <option value="19:30"><?php echo "〇"; ?>19:30</option>
                                            <option value="20:00"><?php echo "〇"; ?>20:00</option>
                                            <option value="20:30"><?php echo "〇"; ?>20:30</option>
                                            <option value="21:00"><?php echo "〇"; ?>21:00</option>
                                            <option value="21:30"><?php echo "〇"; ?>21:30</option>
                                            <option value="22:00"><?php echo "〇"; ?>22:00</option>
                                            <option value="22:30"><?php echo "〇"; ?>22:30</option>
                                            <option value="23:00"><?php echo "〇"; ?>23:00</option>
                                            </select>
                                        </p>
                                        </section>

                                        <button type="submit" name="reserve">予約する</button>
                                    </form>
                                </div>  <!-- right -->

                                <div class="img">
                                    <img src="../../shop_img/<?=$course_img['shop_id']?>/<?=$course_img['img']?>" alt="store_image">
                                </div>
                                <div class="introduction">
                                    <p class="cTop">お店の紹介文　お店のアピールポイント</p>
                                    <div class="intro">
                                        <?php
                                            for($i=0;$i<$infoCnt;$i++){
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

                        <!-- <header>サンプル</header>
                        <div id="sample">
                            <h1 id="sHeader"><?=$shop['name']?></h1>
                            <ul class="sNavi">
                                <li>TOP</li>
                                <li>写真</li>
                                <li>メニュー</li>
                                <li>地図</li>
                            </ul>
                            <div class="introduction">
                                <p id="changeDesign"></p>
                                <div class="intro">
                                    <?php
                                        for($i=0;$i<$infoCnt;$i++){
                                    ?>
                                        <div class="introContent">
                                            <p>■<?=$info[$i]['title']?></p>
                                            <p><?=$info[$i]['info']?></p>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="center"></div>
            </div>
        </div>
    </body>
</html>