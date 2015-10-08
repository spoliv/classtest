<?php
class DBConnection
{
    public $pdo;
    public $sth;
    /*public $id;**/
    static public function config()
    {
        return include __DIR__ . '/../config.php';
    }

    public function __construct()
    {
        /* public function getConnection($sql, $id)
    {
        /*parent::__construct();*/
        $config = static::config();
        $dsn = 'mysql:dbname' . '=' . $config['db']['dbname'] . ';' . 'host' . '=' . $config['db']['host'];
        $dbh = new PDO($dsn, $config['db']['user'], $config['db']['password']);
        $this->pdo = $dbh;
    }

    public function queryall($sql)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }


    public function queryone($sql, $id)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute([':id'=>$id/*$this->id*/]);
        return $sth->fetch();
    }

    public function queryadd($sql, $values)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute($values);
        die('STOP');
    }
}

        /*return $dbh;
    }
}
         /*if($id!==0){
             $sth->execute([':id'=>$id]);

         } else {
             $sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());
             $sth->execute();
         }
         return $sth->fetchAll();

     }
 }


    /*public function query($sql, $id, $values)
    {
        $config = static::config();
        $dsn = 'mysql:dbname' . '=' . $config['db']['dbname'] . ';' . 'host' . '=' . $config['db']['host'];
        $dbh = new PDO($dsn, $config['db']['user'], $config['db']['password']);
        $sth = $dbh->prepare($sql);

        if($values!==0 and $id==0){
            $sth->execute($values);
            $this->id = $dbh->lastInsertId();
            die('STOP');
        }
        elseif($id!==0 and $values==0){
            /*$sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());*/
            /*$sth->execute([':id'=>$id]);
            return $sth->fetch();
            /*if(isset($values)){

                $sth->execute([':id'=>$this->id] + $values);
            }*/
        /*} elseif($id==0 and $values==0) {
            /**$sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());*/
            /*$sth->execute();
            return $sth->fetchAll();
        }elseif($id!==0 and $values!==0){
            $sth->execute([':id'=>$id]+$values);
            die('STOP');
        }

    }
}










    /*static public function config()
    {
        return include __DIR__ . '/../config.php';
    }

    static public function getConnection()
    {
        try {
            $config = static::config();
            $dsn = 'mysql:dbname' . '=' . $config['db']['dbname'] . ';' . 'host' . '=' . $config['db']['host'];
            return new PDO($dsn, $config['db']['user'], $config['db']['password']);
        }catch (PDOException $e){

            throw new ModelException('Проблема с соединением с БД');
        }

    }

    static public function query($sql)
    {
        $dbh = static::getConnection();
        $sth = $dbh->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());
        $sth->execute();
        return $sth->fetchAll();
    }

    static public function queryone($sql, $id)
    {
        $dbh = static::getConnection();
        $sth = $dbh -> prepare($sql);
        $sth -> execute([':id'=>$id]);
        return $sth -> fetchAll();
    }
}*/
    /*$model = new DBConnection('SELECT * FROM news');*/
    /*var_dump($model);*/
