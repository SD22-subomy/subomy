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
        <p><a href="../index.php"><img src="./../../image/gulunte_logo.png" width="300" alt="logo"></a></p>
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
    <div id="content">
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
            </div>

            <div id="hidden_date"></div>
            <input type="hidden" name="id" value="<?php echo $shop_info['id'];?>">
            <input type="submit" name="reserve" value="予約">
        </div>
    </div>
    </form>

    <div id="footer">
        <div class="center">
        </div>
    </div>

</div>
<script src="./../user_js/calendar.js"></script>
</body>
</html>