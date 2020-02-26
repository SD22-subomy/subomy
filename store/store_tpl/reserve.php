<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>予約画面</title>
    <link href="../store_css/modaal.min.css" rel="stylesheet">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="../store_js/modaal.min.js"></script>
    <link href="../store_css/reserve.css" rel="stylesheet" type="text/css">
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

      <section class="back">
        <p><a href=""><img src="../image/arrow1.png" width="25" alt="arrow"></a></p>
        <p>予約</p>
      </section>

      <div id="info">

        <p><?php echo "PIZZA SALVATORE CUOMO & GRILL"; ?></p>  <!-- 店名 -->
        <p><?php echo "イタリアン"; ?></p>  <!-- ジャンル -->
        <p><?php echo "阪急梅田"; ?></p>  <!-- 最寄り駅 -->

        <form action="" method="post">

          <p class="wh">人数</p>
          <ul>
            <li><button type="button" name="１名">１名</button></li>
            <li><button type="button" name="２名">２名</button></li>
            <li><button type="button" name="３名">３名</button></li>
            <li><button type="button" name="４名">４名</button></li>
            <li><button type="button" name="５名">５名</button></li>
            <li><button type="button" name="６名">６名</button></li>
            <li><button type="button" name="７名">７名</button></li>
            <li><button type="button" name="８名">８名</button></li>
            <li><button type="button" name="９名">９名</button></li>
            <li><button type="button" name="１０名">１０名</button></li>
            <li><button type="button" name="１１名">１１名</button></li>
            <li><button type="button" name="１２名">１２名</button></li>
            <li><button type="button" name="１３名">１３名</button></li>
            <li><button type="button" name="１４名">１４名</button></li>
            <li><button type="button" name="１５名">１５名</button></li>
          </ul>

          <p class="wh">日付</p>

          <p class="wh">時間</p>
          <ul>
            <li><button type="button" name="17:00">◎17:00</button></li>
            <li><button type="button" name="17:30">◎17:30</button></li>
            <li><button type="button" name="18:00">◎18:00</button></li>
            <li><button type="button" name="18:30">◎18:30</button></li>
            <li><button type="button" name="19:00">◎19:00</button></li>
            <li><button type="button" name="19:30">◎19:30</button></li>
            <li><button type="button" name="20:00">◎20:00</button></li>
            <li><button type="button" name="20:30">◎20:30</button></li>
            <li><button type="button" name="21:00">◎21:00</button></li>
            <li><button type="button" name="21:30">◎21:30</button></li>
            <li><button type="button" name="22:00">◎22:00</button></li>
            <li><button type="button" name="22:30">◎22:30</button></li>
            <li><button type="button" name="23:00">◎23:00</button></li>
          </ul>

          <p class="wh">コース</p>
          <section>
            <p><?php echo "指定なし（席のみ予約）"; ?></p>
            <p class="change"><a href="#modal1" class="modal1">変更</a><p>
          </section>

          <div id="modal1" style="display:none">
            <p><img src="../image/arrow1.png" width="25" alt="arrow">コース選択</p>
            <ul>
              <li>コースを指定せずに席のみ予約する</li>
              <li>飲み放題コース</li>
              <li>食べ放題コース</li>
            </ul>
          </div>


          <p class="wh">席</p>
          <section>
            <p><?php echo "テーブル（喫煙）"; ?></p>
            <p>予約時２時間制／未成年者のみのご利用不可</p>
            <p class="change"><a href="#modal2" class="modal2">変更</a><p>
          </section>

          <div id="modal2" >
            <p><img src="../image/arrow1.png" width="25" alt="arrow">席選択</p>
            <label><input type="radio" name="seat" value="" checked>テーブル（喫煙）</label>
            <label><input type="radio" name="seat" value="">カウンター</label>
          </div>

          <script type="text/javascript">
            $('.modal1').modaal();  /* コース */
            $('.modal2').modaal();  /* 席 */
          </script>

          <p><button type="submit">予約する</button></p>
        </form>

      </div>  <!-- info -->

    </div>  <!-- wrapper -->

  </body>
</html>
