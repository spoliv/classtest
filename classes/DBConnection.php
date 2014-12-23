<?php
class DBConnection
{
    static function config()
    {
        return include __DIR__ . '/../config.php';
    }

    static function getConnection()
    {
        $config = static::config();
        $dsn = 'mysql:dbname' . '=' . $config['db']['dbname'] . ';' . 'host' . '=' . $config['db']['host'];
        return new PDO($dsn, $config['db']['user'], $config['db']['password']);
    }
    static function query($sql)
    {
        $dbh = static::getConnection();
        $sth = $dbh -> prepare($sql);
        $sth -> execute();
        return $sth -> fetchAll();
    }
    static function queryone($sql, $id)
    {
        $dbh = static::getConnection();
        $sth = $dbh -> prepare($sql);
        $sth -> execute(['id'=>$id]);
        return $sth -> fetchAll();
    }
}