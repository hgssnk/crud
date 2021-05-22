<?php
class DAO
{
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
    function daoSql($sql)
    {
        try {
            $dbh = new PDO("mysql:host=localhost; dbname=book; charset=utf8", 'root', 'root');
            
            $dbh = $this->connect();

            $res = $dbh->query($sql);



            return $res;
        } catch (Exception $e) {
            echo 'error' . $e->getMesseage;
            die();
        }
        $dbh = null;
        return $dbh;
    }
}
