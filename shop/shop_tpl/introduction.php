<form action="../func/introduction.php" method="POST">
    <div id="introdu">
        <?php
            for($i=0;$i<$cnt;$i++){
        ?>
        <table>
            <tbody>
                <tr>
                    <th>タイトル</th>
                    <td><?= $tbl[$i]['title']?>
                </tr>
                <tr>
                    <th>紹介文（100文字以内）</th>
                    <td><?= $tbl[$i]['info']?>
                </tr>
            </tbody>
        </table>
        <?php
            }
        ?>
        <input type="submit" name="intro" value="変更">
    </div>
</form>