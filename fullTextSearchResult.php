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

        include('./dao.php');
        $dao = new DAO;
        $sql = "SELECT * FROM book_list WHERE delete_flg = 0 AND book_name LIKE '%$bn%'";
        $res = $dao->daoSql($sql);

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
        ?>
    </table>
    <div style="text-align:center;"><button type="button" onclick="history.back()">戻る</button></div>
</body>

</html>