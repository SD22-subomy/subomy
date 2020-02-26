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
    <div id="header">
        <?php if($login_flg){?>
        <div>
            <ul>
            <li><a href="./index.php"><img src="./../image/gulunte_logo.png" width="200px"></a></li>
            <li><a href="./controller/my_page.php">マイページ</a></li>
            <li><input type="submit" name="logout" value="ログアウト"></li>
            </ul>
        </div>
        <?php }else{?>
        <div>
            <ul>
            <li><a href="./index.php"><img src="./../image/gulunte_logo.png" width="200px"></a></li>
            <li><a href="./controller/sign_up.php">新規会員登録</a></li>
            <li><a href="./controller/login.php">ログイン</a></li>
            </ul>
        </div>
        <?php }?>
    </div>
</form>

    <div id="content">
        <div class="center">
            <div class="section">
            <h2>ジャンル</h2>
            <ul>
                <?php foreach($genre as $v){?>
                <?php if($v['genre_id'] != 0){?>
                <li><a href="./controller/shop_list.php?genre=<?php echo $v['genre_id']?>"><?php echo $v['genre'];?></a></li>
                <?php }?>
                <?php }?>
            </ul>
            </div>
            <div class="section">
            <h2>利用シーン</h2>
            <ul>
                <?php foreach($use_scene as $v){?>
                <?php if($v['use_id'] != 0){?>
                <li><a href="./controller/shop_list.php?use_scene=<?php echo $v['use_id']?>"><?php echo $v['use_scene'];?></a></li>
                <?php }?>
                <?php }?>
            </ul>
            </div>
            <div class="section">
            <h2>こだわり条件</h2>
            <ul>
                <?php foreach($commitment as $v){?>
                <?php if($v['com_id'] != 0){?>
                <li><a href="./controller/shop_list.php?commitment=<?php echo $v['com_id']?>"><?php echo $v['commitment'];?></a></li>
                <?php }?>
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