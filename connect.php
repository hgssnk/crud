<?php

// DBに接続
$link = mysqli_connect('localhost', 'root', 'root', 'book');

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
} else {
    echo "データベースの接続に成功しました。\n";
}

// userテーブルの全てのデータを取得する
$queryUser  = "SELECT user_id, name FROM user_list;";
// bookテーブルの全てのデータを取得する
$queryBook = "SELECT book_id, name FROM book_list"; 

// 接続を閉じます
mysqli_close($link);

// class db{
//     const DB_NAME   = "book";
//     const HOST      = "localhost";
//     const PASS      = "root";
//     const USER      = "root";

//     $link = mysql_connect(DB_NAME,)

//     function connect(){

//     }
// }