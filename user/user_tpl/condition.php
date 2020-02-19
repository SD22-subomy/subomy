<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>条件登録ページ</title>
<link rel="stylesheet" href="#">
</head>
<body>
<div id="wrapper">

    <div id="header">
        <div class="center">
        </div>
    </div>

    <div id="content">
        <div class="center">
            <form action="" method="POST">
                <select name="prefectures">
                <?php foreach($pre_list as $v){?>
                <option value="<?php echo $v['pre_id'];?>"><?php echo $v['prefectures'];?></option>
                <?php }?>
                </select>

                <select name="genre">
                <?php foreach($genre_list as $v){?>
                <option value="<?php echo $v['genre_id'];?>"><?php echo $v['genre'];?></option>
                <?php }?>
                </select>

                <select name="cuisine">
                <?php foreach($cuisine_list as $v){?>
                <option value="<?php echo $v['cuisine_id'];?>"><?php echo $v['cuisine'];?></option>
                <?php }?>
                </select>

                <select name="use_scene">
                <?php foreach($use_list as $v){?>
                <option value="<?php echo $v['use_id'];?>"><?php echo $v['use_scene'];?></option>
                <?php }?>
                </select>

                <select name="commitment">
                <?php foreach($com_list as $v){?>
                <option value="<?php echo $v['com_id'];?>"><?php echo $v['commitment'];?></option>
                <?php }?>
                </select>

                <input type="submit" name="send" value="登録">
                <input type="submit" name="back" value="マイページへ戻る">
            </form>
        </div>
    </div>

    <div id="footer">
        <div class="center">
        </div>
    </div>

</div>
</body>
</html>