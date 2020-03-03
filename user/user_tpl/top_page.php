<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>TOPページ</title>
<link rel="stylesheet" href="./user_css/top_page.css">
<link rel="stylesheet" href="./user_css/main.css">
</head>
<body>
<div id="wrapper">
<form action="" method="POST">
      <header>
        <p><a href="./index.php"><img src="./image/gulunte.png" width="300" alt="logo"></a></p>
        <?php if($login_flg){?>
            <ul class="sign">
                <li><a href="./controller/my_page.php">マイページ</a></li>
                <li><input type="submit" name="logout" value="ログアウト"></li>
            </ul>
            <?php }else{?>
            <ul class="sign">
                <li><a href="./controller/sign_up.php">新規登録</a></li>
                <li><a href="./controller/login.php">ログイン</a></li>
            </ul>
            <?php }?>
        </header>
        
      <div id="main">
        <p><img src="image/top3.png" width="730"></p>
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
    </form>
    <div id="area">
        <p>≪ 都道府県一覧へ戻る</p>
        <p>大阪</p>
        <ul>
            <?php
            for($i = 0;$i<25;$i++){
            ?>
                <li><button type="submit">area</button></li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div id="content">
        <div class="center">
            <div class="janru">
            <p>ジャンル</p>
            <ul>
                <?php foreach($genre as $v){?>
                <?php if($v['genre_id'] != 0){?>
                <li>
                    <a href="./controller/shop_list.php?genre=<?php echo $v['genre_id']?>">
                        <span class="mozi"><?php echo $v['genre'];?></span>
                        <img src="image/j_<?= $v['genre_id']?>.jpg" width="100">
                    </a>
                </li>
                <?php }?>
                <?php }?>
            </ul>
            </div>

            <div class="scene">
            <p>利用シーン</p>
            <ul>
                <?php foreach($use_scene as $v){?>
                <?php if($v['use_id'] != 0){?>
                <li>

                    <a href="./controller/shop_list.php?use_scene=<?php echo $v['use_id']?>">
                        <span class="mozi"><?php echo $v['use_scene'];?></span>
                        <img src="image/s_<?= $v['use_id']?>.jpg" width="100">
                    </a>
                </li>
                <?php }?>
                <?php }?>
            </ul>
            </div>
            <div class="com">
            <p>こだわり条件</p>
            <ul>
                <?php foreach($commitment as $v){?>
                <?php if($v['com_id'] != 0){?>
                <li>
                    <a href="./controller/shop_list.php?commitment=<?php echo $v['com_id']?>">
                        <span class="mozi"><?php echo $v['commitment'];?></span>
                        <img src="image/k_<?= $v['com_id']?>.jpg" width="100">
                    </a>
                </li>
                <?php }?>
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