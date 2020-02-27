<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>店名</title>
    <link href="../store_css/store_top.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p&display=swap" rel="stylesheet">
  </head>
  <body>

    <div id="wrapper">

      <header>
        <p><img src="../image/gulunte.png" width="300" alt="logo"></p>
        <p class="sign"><a href="">新規登録</a><a href="">ログイン</a></p>

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
      </header>

      <div id="main">

        <div id="info">

          <div class="kihon">
            <p>ジャンル ＞ イタリアン</p>  <!-- パンくずリスト？ -->
            <h1><?php echo "PIZZA SALVATORE CUOMO & GRILL"; ?></h1>
            <p><img src="../image/star_yellow.png" width="40"><img src="../image/star_yellow.png" width="40"><img src="../image/star_yellow.png" width="40"><img src="../image/star.png" width="40"><img src="../image/star.png" width="40"></p>

            <section>
              <p><img src=""><span>✆</span><?php echo "050-1234-5678"; ?></p>
              <ul>
                <li>行った<img src="../image/where.png" width="17"></li>
                <li>保存<img src="../image/save.png" height="20"></li>
                <li>送る<img src="../image/send.png" width="25"></li>
              </ul>
            </section>

            <ul>
              <li><span>最寄り駅：</span><?php echo "緩急梅田"; ?></li>
              <li><span>ジャンル：</span><?php echo "イタリアン"; ?></li>
              <li><span>予算：</span><img src="../image/sun.png" width="15"><?php echo "￥1,000 ~ ￥1,999"; ?>　<img src="../image/moon.png" width="15"><?php echo "￥3,000 ~ ￥3,999"; ?></li>
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

          <p class="introduction"><?php echo "お店の紹介文　お店のアピールポイント"; ?></p>
          <p class="introduction"><?php echo "■本場ナポリの窯焼きピザ<br>世界的祭典「PIZZA FEST」で最優勝を受賞<br>厳選食材を使用し、専門のピッツァ職人が手伸ばしして焼き上げます"; ?></p>
          <p class="introduction"><?php echo "■当日２名様～OK！多彩なパーティプラン3,500円～<br>【絶品食材】がっつりお肉を楽しむコース　飲み放題付5,000円"; ?></p>
          <p class="introduction"><?php echo "■大人気☆ランチビュッフェ1500円～<br>◎ストロベリービュッフェ開催中<br>自慢の焼き立てピッツァはもちろん旬食材のアラカルトやパスタなど30種以上が食べ放題"; ?></p>

          <hr>

          <p class="what">店舗基本情報</p>
          <table>
            <tr>
              <td>店名</td>
              <td><?php echo "PIZZA SALVATORE CUOMO & GRILL"; ?></td>
            </tr>
            <tr>
              <td>ジャンル</td>
              <td><?php echo "イタリアン"; ?></td>
            </tr>
            <tr>
              <td>予約・お問合わせ</td>
              <td><?php echo "050-1234-5678"; ?></td>
            </tr>
            <tr>
              <td>住所</td>
              <td><?php echo "大阪府大阪市北区"; ?></td>
            </tr>
            <tr>
              <td>交通手段</td>
              <td><?php echo "阪急梅田駅から徒歩10分<br>JR大阪駅から徒歩5分"; ?></td>
            </tr>
            <tr>
              <td>営業時間・定休日</td>
              <td><?php echo "営業時間<br>
                              【月～日】<br>
                              Lunch：11:00 - 15:30<br>
                              Cafe：14:30 - 16:00<br>
                              Dinner：17:00 - 23:00<br>
                              <br>
                              定休日<br>
                              元旦"; ?></td>
            </tr>
            <tr>
              <td>予算</td>
              <td><img src="../image/sun.png" width="15"><?php echo "￥1,000 ~ ￥1,999"; ?>　<img src="../image/moon.png" width="15"><?php echo "￥3,000 ~ ￥3,999"; ?></td>
            </tr>
            <tr>
              <td>ホームページ</td>
              <td>▶<?php echo "http://www.salvatore.jp/restaurant/osaka"; ?></td>
            </tr>
          </table>

        </div>  <!-- left -->

      </div> <!-- main -->

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

    </div> <!-- wrapper -->

  </body>
</html>
