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
    $bi = $_POST['book_id'];

    include('./dao.php');
    $dao = new DAO;
    $sql = "UPDATE book_list SET delete_flg = 1 WHERE book_id='$bi'";
    $res = $dao->daoSql($sql);
    ?>
    <div style="text-align:center;">
        <a href="allSearch.php">一覧へ</a></br>
        <button type="button" onclick="history.back()">戻る</button>
    </div>
</body>

</html>