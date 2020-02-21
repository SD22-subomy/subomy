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

    <div id="header">
        <div class="center">
        </div>
    </div>

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