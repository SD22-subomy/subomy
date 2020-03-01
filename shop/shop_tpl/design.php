<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>店舗　デザイン</title>
        <link rel="stylesheet" href="../shop_css/design.css">
        <script src="../../jquery-3.4.1.min.js"></script>
        <script src="../javascript/imageselect.js"></script>
        <script src="../javascript/design.js"></script>
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
                    <!-- <table>
                        <tr>
                            <th>カラー</th>
                            <td>
                                <select>
                                    <option></option>
                                </select>
                            </td>
                            <th>デザイン</th>
                            <td>
                                <select name="design">
                                    <option>選択なし</option>
                                    <?php
                                    for($i=1;$i<$cnt;$i++){
                                    ?>
                                    <option value="<?=$i?>">../../design/<?= $tbl[$i]['design']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                    </table> -->
                    <?=$color['code1']?>
                    <?=$color['code2']?>
                    <form id="color">
                        <?php
                            for($i=0;$i<)
                        ?>
                    </form>
                    <form id="design">
                        <h3>デザイン</h3>
                        <label>
                            <input type="radio" name="design[]">選択なし
                        </label>
                        <?php
                            for($i=1;$i<$cnt;$i++){
                        ?>
                        <label>
                            <input type="radio" name="design[]" value="<?=$tbl[$i]['design']?>">
                            <img src="../../design/<?= $tbl[$i]['design']?>">
                        </label>
                        <?php
                            }
                        ?>
                    </form>
                    <form id="season">
                        <h3>季節</h3>
                    </form>
                    <form action="" method="POST">
                        <div id="sample">
                            <header>サンプル</header>
                            <p>■<?=$info['title']?></p>
                            <p><?=$info['info']?></p>
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