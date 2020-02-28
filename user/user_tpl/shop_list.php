<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>検索画面</title>
<link rel="stylesheet" href="./../user_css/shop_list.css">
<link rel="stylesheet" href="./../user_css/main.css">
</head>
<body>
<div id="wrapper">

      <header>
        <p><img src="./../../image/gulunte_logo.png" width="300" alt="logo"></p>
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
          <button type="submit">検索<img src="./../../image/search.png" width="20" alt="search"></button>
      </header>

    <div id="content">
        <div class="center">
            <div class="shop_list">
                <ul>
                    <?php foreach($shop_info as $v){?>
                    <li>
                    <a href="./shop_info.php?shop_id=<?php echo $v['id'];?>">
                        店舗名：<?php echo $v['name'];?>
                    </a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>

    <div id="footer">
        <div class="center">
        </div>
    </div>

</div>
</body>
</html>