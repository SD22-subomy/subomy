<form action="../func/introduction.php" method="POST">
    <div id="introdu">
        <table>
            <tr>
                <th>タイトル</th>
                <td><?= $row['title']?>
            </tr>
            <tr>
                <th>紹介文（100文字以内）</th>
                <td><?= $row['info']?>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="intro" value="変更">
                </td>
            </tr>
        </table>
    </div>
</form>