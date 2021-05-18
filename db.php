<?php
class db{
    // 変数の初期化
    sql = null;
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
}
?>
