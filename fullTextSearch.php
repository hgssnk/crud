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
        <form action="../fullTextSearchResult.php" method="POST">
            <table border="0" align="center">
                <tr>
                    <th>書籍名</th>
                    <th>カテゴリ</th>
                </tr>
                <tr>
                    <td><input type="text" name="book_name"></td>
                    <td><input type="text" name="category"></td>
                </tr>
            </table>
            <div style="text-align:center;"><input type="submit" value="検索"></div>
        </form>
</body>

</html>