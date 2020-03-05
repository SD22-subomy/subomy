<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>検索画面</title>
<link rel="stylesheet" href="./../user_css/shop_list.css">
<!-- <link rel="stylesheet" href="./../user_css/main.css"> -->
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
      </header>

      <div id="main">
        <p><img src="../image/img_<?php echo $_GET['genre'];?>.jpg" width="730" height="300"></p>
        <p class="clear"></p>
        <div class="seach">
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
        </div>
       </div>

    <div id="content">
        <div class="about">
            <div class="left">
                <form action="" method="post">
                    <section>
                    <p>エリアから探す</p>
                    <p>全国 > 大坂</p>
                    </section>

                    <section>
                    <p>ジャンルから探す</p>
                    <p>すべて > イタリアン</p>
                    </section>

                    <ul>
                    <li>日付</li>
                    <li><input type="date" name="date" required min="2020-02-29" max="2020-03-28"></li>
                    </ul>

                    <ul>
                    <li>予算<li>
                    <li>
                        <select name="">
                        <option value="">未選択</option>
                        <option value="1000">￥1,000~</option>
                        <option value="1500">￥1,500~</option>
                        <option value="2000">￥2,000~</option>
                        <option value="2500">￥2,500~</option>
                        <option value="3000">￥3,000~</option>
                        </select>
                        ~
                        <select name="">
                        <option value="">未選択</option>
                        <option value="5000">~￥5,000</option>
                        <option value="6000">~￥6,000</option>
                        <option value="7000">~￥7,000</option>
                        <option value="8000">~￥8,000</option>
                        <option value="9000">~￥9,000</option>
                        <option value="10000">~￥10,000</option>
                    </select>
                    </li>
                    </ul>

                    <section>
                    <p class="gray">営業</p>
                    <select name="">
                        <option value="">営業時間　指定なし</option>
                        <option value="朝">朝営業(5時～10時)</option>
                        <option value="ランチ">ランチ(10時～14時)</option>
                        <option value="午後">午後営業(14時～17時)</option>
                        <option value="ディナー">ディナータイム(17時～24時)</option>
                        <option value="深夜">深夜営業(23時～29時)</option>
                        <option value="24時間">24時間営業</option>
                    </select>
                    </section>

                    <section>
                    <p class="gray">席タイプ</p>
                    <ul>
                        <li><input type="checkbox" name="room" value="">個室あり</li>
                        <li><input type="checkbox" name="counter" value="">カウンター</li>
                    </ul>
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
                    <p class="gray">宴会</p>
                    <ul>
                    <li><input type="checkbox" name="room" value="">飲み放題あり</li>
                    <li><input type="checkbox" name="counter" value="">食べ放題あり</li>
                    </ul>
                    </section>

                    <p><button type="submit"><img src="../image/search.png" width="20">検索する</button></p>
                </form>
            </div>  <!-- left -->
            <div class="right">
                <ul>
                    <?php foreach($shop_info as $v){?>
                    <a href="./shop_info.php?shop_id=<?php echo $v['id'];?>">
                        <li class="rContent">
                            <span class="rLeft">
                                <p><img src="image/" width="150"></p>
                            </span>
                            <span class="rRight">
                                <?php echo $v['name'];?>
                                <p><img src="../image/star_yellow.png" width="30"><img src="../image/star_yellow.png" width="30"><img src="../image/star_yellow.png" width="30"><img src="../image/star.png" width="30"><img src="../image/star.png" width="30"></p>
                                <p><?php echo $v['budget'];?></p>
                                <p><span>ジャンル：</span><?php echo $v['genre'];?>
                            </span>
                        </li>
                    </a>
                    <?php }?>
                </ul>
            </div>
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
</body>
</html>