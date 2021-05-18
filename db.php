<?php

$link = mysqli_connect('localhost', 'root', 'root', 'book');

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
} else {
    echo "データベースの接続に成功しました。\n";
}

// userテーブルの全てのデータを取得する
$query  = "SELECT user_id, name FROM user_list;";
// bookテーブルの全てのデータを取得する
$query2 = "SELECT book_id, name FROM book_list"; 

// クエリを実行します。
if ($result = mysqli_query($link, $query)) {
    echo "SELECT に成功しました。\n";
    foreach ($result as $row) {
        var_dump($row);
    }
}
if ($result = mysqli_query($link, $query2)) {
    echo "SELECT に成功しました。\n";
    foreach ($result as $row) {
        var_dump($row);
    }
}

// 接続を閉じます
mysqli_close($link);