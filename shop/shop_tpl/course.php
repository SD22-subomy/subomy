<form action="../func/course.php" method="POST">
<?php
    if($cnt != 0){
?>
    <div id="course_list">
    <?php
        for($i = 0; $i < $cnt; $i++){
    ?>
    <h3><?= $tbl[$i]['title']?></h3>
    <div class="top">
        <p><img src="../course_img/<?= $tbl[$i]['img']?>"></p>
        <p><?= $tbl[$i]['name']?></p>
    </div>
        <table>
            <tr>
                <th>金額</th>
                <td><?= $tbl[$i]['price']?></td>
            </tr>
            <tr>
                <th>コース内容</th>
                <td><?= $tbl[$i]['other']?></td>
            </tr>
        </table>
    <?php
         }
    ?>
    <input type="submit" name="info" value="変更">

<?php
    }else{
        $row = [
            'title' => "ーーー",
            'name' => "ーーー",
            'price' => "ーーー",
            'other' => "ーーー",
            'img' => "写真なし",
        ];
?>
    <div id="course">
        <table>
            <tr>
                <th>タイトル</th>
                <td><?= $row['title']?></td>
            </tr>
            <tr>
                <th>コース名</th>
                <td><?= $row['name']?></td>
            </tr>
            <tr>
                <th>金額</th>
                <td><?= $row['price']?></td>
            </tr>
            <tr>
                <th>コース内容</th>
                <td><?= $row['other']?></td>
            </tr>
            <tr>
                <th>コースの写真</th>
                <td><?= $row['img']?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="info" value="変更">
                </td>
            </tr>            
        </table>
        <?php
            }
        ?>
    </div>
</form>