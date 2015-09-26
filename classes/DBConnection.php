<?php
class DBConnection
{
    static function config()
    {
        return include __DIR__ . '/../config.php';
    }

    public function __construct($sql)
    {
        $config = self::config();
        $dsn = 'mysql:dbname' . '=' . $config['db']['dbname'] . ';' . 'host' . '=' . $config['db']['host'];
        $dbh = new PDO($dsn, $config['db']['user'], $config['db']['password']);
        $sth = $dbh->prepare($sql);
        /*$sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());*/
        $sth->execute();
        $sth->fetchAll();
        /*var_dump($data);*/
    }
}
    /*public function queryone($sql, $id)
    {
        $dbh = getConnection();
        $sth = $dbh -> prepare($sql);
        $sth -> execute(['id'=>$id]);
        return $sth -> fetchAll();
    }*/
    /*$model = new DBConnection('SELECT * FROM news');*/
    /*var_dump($model);*/
