<form action="../func/introduction.php" method="POST">
    <div id="introdu">
        <h2>店舗紹介文</h2>
        <h3><?= $row['title']?></h3>
        <p><?= $row['info']?></p>
        <input type="submit" name="intro" value="変更">
    </div>
</form>