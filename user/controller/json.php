<?php
//データベースに接続し、shop_design　をinner joinする


// $row = mysqli_fetch_assoc(shop_select($cn,$sql));
//JavaScriptに渡すためにjson_encodeを行う
header("Content-type: application/json; charset=UTF-8");
echo json_encode($row);
exit;
?>