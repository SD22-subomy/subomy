<form action="../func/information.php" method="POST">
    <div id="information">
        <table>
            <tr>
                <th>店舗名</th>
                <td><?= $row['name'] ?></td>
            </tr>
            <tr>
                <th>ジャンル</th>
                <td><?= $row['genre']?></td>
            </tr>
            <tr>
                <th>お問い合わせ</th>
                <td><?= $row['tel']?></td>
            </tr>
            <tr>
                <th>住所</th>
                <td><?= $row['addres']?></td>
            </tr>
            <tr>
                <th>交通手段</th>
                <td><?= $row['access']?></td>
            </tr>
            <tr>
                <th>営業時間</th>
                <td><?= $row['shop_time']?></td>
            </tr>
            <tr>
                <th>定休日</th>
                <td><?= $row['holiday']?></td>
            </tr>
            <tr>
                <th>予算</th>
                <td><?= $row['budget']?></td>
            </tr>
            <tr>
                <th>テーブル座席数</th>
                <td><?= $row['table_re']?>席</td>
            </tr>
            <tr>
                <th>カウンター座席数</th>
                <td><?= $row['counter_re']?>席</td>
            </tr>
            <tr>
                <th>ホームページ</th>
                <td><?= $row['url']?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="info" value="変更">
                </td>
            </tr>
        </table>
    </div>
</form>