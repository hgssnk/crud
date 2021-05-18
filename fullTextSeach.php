<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>TITLE</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="css/styles.css">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
<?php

// 変数の初期化
$sql = null;
$res = null;
$dbh = null;

try {
	// DBへ接続
	$dbh = new PDO("mysql:host=localhost; dbname=book; charset=utf8", 'root', 'root');

	// SQL作成
	$sql = "SELECT * FROM user_list";

	// SQL実行
	$res = $dbh->query($sql);

	// 取得したデータを出力
	foreach( $res as $value ) {
		echo "$value[user_id]<br>";
    echo "$value[name]<br>";
	}

} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

// 接続を閉じる
$dbh = null;

?>
</body>

</html>