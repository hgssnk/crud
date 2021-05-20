<?php
class DAO
{
    // 変数の初期化
    private $sql;
    private $res;
    private $dbh;

    // コンストラクタ
    function __construct()
    {
        $this->sql = null;
        $this->res = null;
        $this->dbh = null;
    }

    function connect()
    {
        try {
            $dbh = new PDO("mysql:host=localhost; dbname=book; charset=utf8", 'root', 'root');
        } catch (Exception $e) {
            echo 'error' . $e->getMesseage;
            die();
        }
        //エラーを表示してくれる。
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $dbh;
    }

    // 全検索
    function select($sql)
    {
        // DB接続
        $dbh = $this->connect();

        // SQL実行
        $res = $dbh->query($sql);

        // 結果返す
        return $res;
    }

    // 登録
    function insert($sql)
    {
        // DB接続
        $dbh = $this->connect();

        // SQL実行
        $res = $dbh->query($sql);

        // 結果返却

    }

    // 削除
    function deleteDb($dbName, $id)
    {
        // DB接続
        $dbh = $this->connect();

        // SQL
        $sql = "DELETE FROM $dbName WHERE id = '$id'";

        // 実行
        $res = $dbh->query($sql);
    }
}
