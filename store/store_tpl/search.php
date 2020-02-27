<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>検索結果</title>
    <link href="../store_css/search.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="wrapper">

      <header>
        <p><img src="../image/gulunte.png" width="250" alt="logo"></p>
        <ul>
          <li><a href="">新規登録</a></li>
          <li><a href="">ログイン</a></li>
        </ul>
      </header>

      <div class="main">
        <p><img src="../image/top.jpg" width="730" alt="image"></p>
        <p class="clear"></p>

        <form action="" method="post">
          <input type="text" name="" placeholder="エリア">
          <input type="text" name="" placeholder="ジャンル・目的・店名">
          <select name="">
            <option value="">こだわり条件</option>
            <option value="飲み放題">飲み放題</option>
            <option value="食べ放題">食べ放題</option>
            <option value="個室">個室</option>
            <option value="貸切">貸切</option>
            <option value="おしゃれ">おしゃれ</option>
          </select>
          <button type="submit">検索<img src="../image/search.png" width="20" alt="search"></button>
        </form>

      </div>  <!-- main -->

      <div class="about">

        <div class="left">
          <form action="" method="post">
            <section>
              <p>エリアから探す</p>
              <p>全国 > 大坂</p>
            </section>

            <section>
              <p>ジャンルから探す</p>
              <p>すべて > <?php echo "イタリアン"; ?></p>
            </section>

            <p>日付<input type="date" name="date" required min="<?php echo date("Y-m-d", strtotime("+1 day")); ?>" max="<?php echo date("Y-m-d", strtotime("+1 month")); ?>"></p>

            <p>予算
              <select name="">
                <option value="">未選択</option>
                <option value="1000">￥1,000~</option>
                <option value="1500">￥1,500~</option>
                <option value="2000">￥2,000~</option>
                <option value="2500">￥2,500~</option>
                <option value="3000">￥3,000~</option>
              </select>
              ～
              <select name="">
                <option value="">未選択</option>
                <option value="5000">~￥5,000</option>
                <option value="6000">~￥6,000</option>
                <option value="7000">~￥7,000</option>
                <option value="8000">~￥8,000</option>
                <option value="9000">~￥9,000</option>
                <option value="10000">~￥10,000</option>
              </select>
            </p>

            <section>
              <p class="gray">営業</p>
              <select name="">
                <option value="">営業時間　指定なし</option>
                <option value="朝">朝営業（5時～10時）</option>
                <option value="ランチ">ランチ（10時～14時）</option>
                <option value="午後">午後営業（14時～17時）</option>
                <option value="ディナー">ディナータイム（）17時～24時</option>
                <option value="深夜">深夜営業（23時～29時）</option>
                <option value="24時間">24時間営業</option>
              </select>
            </section>

            <section>
              <p>席タイプ</p>
              <p><input type="checkbox" name="room" value="">個室あり</p>
              <p><input type="checkbox" name="counter" value="">カウンター</p>
            </section>

            <section>
              <p class="gray">喫煙／禁煙</p>
              <select name="">
                <option value="">営業時間　指定なし</option>
                <option value="">喫煙可</option>
                <option value="">禁煙</option>
              </select>
            </section>

            <section>
              <p>宴会</p>
              <p><input type="checkbox" name="room" value="">飲み放題あり</p>
              <p><input type="checkbox" name="counter" value="">食べ放題あり</p>
            </section>

            <p><button type="submit"><img src="../image/search.png" width="15">検索する</button></p>
          </form>
        </div>  <!-- left -->

        <div class="right">
          <section>
            <p><img src="../image/<?php echo "j_italy.jpg"; ?>" width="150"></p>
            <p><?php echo "PIZZA SALVATORE CUOMO & GRILL"; ?></p>
            <p><img src="../image/star_yellow.png" width="30"><img src="../image/star_yellow.png" width="30"><img src="../image/star_yellow.png" width="30"><img src="../image/star.png" width="30"><img src="../image/star.png" width="30"></p>
            <p><img src="../image/sun.png" width="15"><?php echo "￥1,000 ~ ￥1,999"; ?>　<img src="../image/moon.png" width="15"><?php echo "￥3,000 ~ ￥3,999"; ?></p>
            <ul>
              <li><span>最寄り駅：</span><?php echo "阪急梅田"; ?></li>
              <li><span>ジャンル：</span><?php echo "イタリアン"; ?></li>
            </ul>
          </section>

          <section>
            <p><img src="../image/<?php echo "j_french.jpg"; ?>" width="150"></p>
            <p><?php echo "son-ju-cue"; ?></p>
            <p><img src="../image/star_yellow.png" width="30"><img src="../image/star_yellow.png" width="30"><img src="../image/star_yellow.png" width="30"><img src="../image/star.png" width="30"><img src="../image/star.png" width="30"></p>
            <p><img src="../image/sun.png" width="15"><?php echo "営業時間外"; ?>　<img src="../image/moon.png" width="15"><?php echo " ~￥4,000"; ?></p>
            <ul>
              <li><span>最寄り駅：</span><?php echo "四ツ橋駅"; ?></li>
              <li><span>ジャンル：</span><?php echo "イタリアン"; ?></li>
            </ul>
          </section>

        </div>  <!-- right -->

      </div>  <!-- about -->
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

    </div>  <!-- wrapper -->

  </body>
</html>
