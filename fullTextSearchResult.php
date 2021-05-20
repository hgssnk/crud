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
    <table border="1" align="center">
        <tr>
            <th>書籍ID</th>
            <th>書籍名</th>
            <th>著者</th>
            <th>カテゴリ</th>
            <th>出版年</th>
        </tr>
        <?php
        $bn = $_POST['book_name'];

        // 変数の初期化
        $sql = null;
        $res = null;
        $dbh = null;

        try {
            // DBへ接続
            $dbh = new PDO("mysql:host=localhost; dbname=book; charset=utf8", 'root', 'root');

            // SQL作成
            $sql = "SELECT * FROM book_list WHERE book_name LIKE '%$bn%'";

            // SQL実行
            $res = $dbh->query($sql);

            // 取得したデータを出力
            foreach ($res as $value) {
                echo "<tr>"
                    . "<td>$value[book_id]</td>"
                    . "<td>$value[book_name]</td>"
                    . "<td>$value[author]</td>"
                    . "<td>$value[category]</td>"
                    . "<td>$value[year]</td>"
                    . "</tr>";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
        // 接続を閉じる
        $dbh = null;
        ?>
    </table>
    <div style="text-align:center;"><button type="button" onclick="history.back()">戻る</button></div>
</body>

</html>