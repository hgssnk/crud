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

    // POST取得
    $bn = $_POST['book_name'];
    $au = $_POST['author'];
    $cg = $_POST['category'];
    $ye = $_POST['year'];

    // 変数の初期化
    $sql = null;
    $res = null;
    $dbh = null;

    try {
        // DBへ接続
        $dbh = new PDO("mysql:host=localhost; dbname=book; charset=utf8", 'root', 'root');

        // SQL作成
        $sql = "INSERT INTO book_list VALUES(null,'$bn','$au','$cg','$ye')";

        // SQL実行
        $res = $dbh->query($sql);
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
    // 接続閉じ
    $dbh = null;
    echo '<div style="text-align:center;">登録完了</div>';
    ?>
    <div style="text-align:center;"><button type="button" onclick="history.back()">戻る</button></div>
</body>

</html>