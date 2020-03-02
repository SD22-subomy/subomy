<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>店舗詳細ページ</title>
<link rel="stylesheet" href="./../user_css/calendar.css">
<link rel="stylesheet" href="./../user_css/shop_info.css">
<link rel="stylesheet" href="./../user_css/main.css">
</head>
<body>
<div id="wrapper">

      <header>
        <p><a href="../index.php"><img src="./../image/gulunte.png" width="300" alt="logo"></a></p>
        <?php if($login_flg){?>
            <ul class="sign">
                <li><a href="./my_page.php">マイページ</a></li>
                <li><input type="submit" name="logout" value="ログアウト"></li>
            </ul>
            <?php }else{?>
            <ul class="sign">
                <li><a href="./sign_up.php">新規登録</a></li>
                <li><a href="./login.php">ログイン</a></li>
            </ul>
            <?php }?>
            <input type="text" class="input1" name="" placeholder="エリア">
            <input type="text" class="input2" name="" placeholder="ジャンル・目的・店名">
            <select name="">
                <option value="">こだわり条件</option>
                <option value="飲み放題">飲み放題</option>
                <option value="食べ放題">食べ放題</option>
                <option value="個室">個室</option>
                <option value="貸切">貸切</option>
                <option value="おしゃれ">おしゃれ</option>
            </select>
          <button type="submit">検索<img src="../image/search.png" width="20" alt="search"></button>
      </header>

    <form action="" method="get">
        <div id="main">
        <div id="info">


          <div class="kihon">
            <p>ジャンル ＞ <?php echo $shop_info['genre'];?></p>  <!-- パンくずリスト？ -->
            <h1><?php echo $shop_info['name']; ?></h1>
            <p><img src="../image/star_yellow.png" width="40"><img src="../image/star_yellow.png" width="40"><img src="../image/star_yellow.png" width="40"><img src="../image/star.png" width="40"><img src="../image/star.png" width="40"></p>

            <section>
              <p><img src=""><span>✆</span><?php echo $shop_info['tel']; ?></p>
              <ul>
                <li>行った<img src="../image/where.png" width="17"></li>
                <li>保存<img src="../image/save.png" height="20"></li>
                <li>送る<img src="../image/send.png" width="25"></li>
              </ul>
            </section>

            <ul>
              <li><span>最寄り駅：</span><?php echo "阪急梅田"; ?></li>
              <li><span>ジャンル：</span><?php echo $shop_info['genre']; ?></li>
              <li><span>予算：</span><!-- <img src="../image/sun.png" width="15"><?php echo "￥1,000 ~ ￥1,999"; ?>　<img src="../image/moon.png" width="15"><?php echo "￥3,000 ~ ￥3,999"; ?> --><?php echo $shop_info['budget'];?></li>
            </ul>
          </div>  <!-- kihon -->

        </div>  <!-- info -->

        <ul>
          <li>TOP</li>
          <li>写真</li>
          <li>メニュー</li>
          <li>地図</li>
        </ul>

        <div class="right">
          <form class="" action="index.html" method="post">
            <section class="calender">
              <p>来店日
                <input type="date" name="date" required min="<?php echo date("Y-m-d", strtotime("+1 day")); ?>" max="<?php echo date("Y-m-d", strtotime("+1 month")); ?>">
              </p>
            </section>

            <section>
              <p>人数
                <select name="">
                  <option value=""><?php echo "〇"; ?>１名</option>
                  <option value="２名"><?php echo "〇"; ?>２名</option>
                  <option value="３名"><?php echo "〇"; ?>３名</option>
                  <option value="４名"><?php echo "〇"; ?>４名</option>
                  <option value="５名"><?php echo "〇"; ?>５名</option>
                  <option value="６名"><?php echo "〇"; ?>６名</option>
                  <option value="７名"><?php echo "〇"; ?>７名</option>
                  <option value="８名"><?php echo "〇"; ?>８名</option>
                  <option value="９名"><?php echo "〇"; ?>９名</option>
                  <option value="１０名"><?php echo "〇"; ?>１０名</option>
                  <option value="１１名"><?php echo "〇"; ?>１１名</option>
                  <option value="１２名"><?php echo "〇"; ?>１２名</option>
                  <option value="１３名"><?php echo "〇"; ?>１３名</option>
                  <option value="１４名"><?php echo "〇"; ?>１４名</option>
                  <option value="１５名"><?php echo "〇"; ?>１５名</option>
                </select>
              </p>
            </section>

            <section>
              <p>時間
                <select name="">
                  <option value=""><?php echo "〇"; ?>18:00</option>
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

            <button type="submit">予約する</button>
          </form>
        </div>  <!-- right -->

        <div class="left">
          <section>
            <img src="../image/img_1.jpg" width="500" alt="store_image">
          </section>

          <p class="introduction"><?php echo $shop_info['title']; ?></p>
        <p class="introduction"><?php echo $shop_info['info']; ?></p>


          <hr>

          <p class="what">店舗基本情報</p>
          <table>
            <tr>
              <td>店名</td>
              <td><?php echo $shop_info['name']; ?></td>
            </tr>
            <tr>
              <td>ジャンル</td>
              <td><?php echo $shop_info['genre']; ?></td>
            </tr>
            <tr>
              <td>予約・お問合わせ</td>
              <td><?php echo $shop_info['tel']; ?></td>
            </tr>
            <tr>
              <td>住所</td>
              <td><?php echo $shop_info['address']; ?></td>
            </tr>
            <tr>
              <td>交通手段</td>
              <td><?php echo $shop_info['access']; ?></td>
            </tr>
            <tr>
              <td>営業時間・定休日</td>
              <td><?php echo $shop_info['holiday']; ?></td>
            </tr>
            <tr>
              <td>予算</td>
              <td><?php echo $shop_info['budget']; ?><!-- <img src="../image/sun.png" width="15"><?php echo "￥1,000 ~ ￥1,999"; ?>　<img src="../image/moon.png" width="15"><?php echo "￥3,000 ~ ￥3,999"; ?> --></td>
            </tr>
            <tr>
              <td>ホームページ</td>
              <td>▶<?php echo $shop_info['url']; ?></td>
            </tr>
          </table>

        </div>  <!-- left -->


<!--     <div id="content">
        <div class="center">
            <ul>
                <li><?php echo $shop_info['name'];?></li>
                <li><?php echo $shop_info['address'];?></li>
                <li><?php echo $shop_info['tel'];?></li>
            </ul>
            <table border="1">
                <tr>
                    <td>コース名</td>
                    <td>料金</td>
                    <td>備考</td>
                </tr>
                <?php foreach($course_list as $v){?>
                <tr>
                    <td><?php echo $v['name'];?></td>
                    <td><?php echo $v['price'];?></td>
                    <td><?php echo $v['other'];?></td>
                </tr>
                <?php }?>
            </table>

            <div id="calendar_form">
            <ul>
            <li><button id="prev" type="button">＜</button></li>
            <li><div id="calendar"></div></li>
            <li><button id="next" type="button">＞</button></li>
            </ul>
            </div> -->

            <div id="hidden_date"></div>
            <input type="hidden" name="id" value="<?php echo $shop_info['id'];?>">
<!--             <input type="submit" name="reserve" value="予約"> -->
    </form>
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

<!--     <div id="footer">
        <div class="center">
        </div>
    </div> -->

</div>
<!-- <script src="./../user_js/calendar.js"></script> -->
</body>
</html>