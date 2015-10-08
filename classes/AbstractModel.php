<?php
/*require __DIR__ . '/../boot.php';*/
class ModelException extends Exception {}

abstract class AbstractModel
{
    static protected $table;
    static protected $columns;

    /*static function getTableName()
    {
        return static::$table;
    }*/

    static public function findAll()
    {
        /*$sbh = new DBConnection;*/
        $sql = 'SELECT * FROM' . ' ' . static::$table/*static::getTableName()*/
        ;
        $res = new DBConnection;
        /*$sth = $sbh->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());
        $sth->execute();
        return $sth->fetchAll();*/
        return $res->queryall($sql/*, 0, 0*/);
        /*return new DBConnection($sql, $id = 0);*/
        /*return DBConnection::query($sql);*/
    }

    static public function findByPk($id)
    {
        $sql = 'SELECT * FROM' . ' ' . static::$table/*static::getTableName()*/ . ' ' .  'WHERE id = :id';
        $res = new DBConnection;
        return $res->queryone($sql, $id/*, 0*/);
        /*return new DBConnection($sql, $id);*/
        /*return DBConnection::queryone($sql, $id);*/
    }

    public function save()
    {
        $tokens = [];
        $values = [];
        foreach (static::$columns as $column) {

            $tokens[] = ':' . $column;
            $values[':' . $column] = $this->$column;
        }
        /*if (!isset($this->id)) {*/

            $sql = 'INSERT INTO' . ' ' . static::$table . '
            (' . implode(',', static::$columns) . ')
            VALUE(' . implode(',', $tokens) . ')';
            $res = new DBConnection;
            $res->queryadd($sql, $values);
        }
        /*else{

            $columns = [];
            foreach(static::$columns as $column){

                $columns[] = $column . '=:' . $column;
            }
            $sql = 'UPDATE TABLE SET' . ' ' . implode(',', $columns) . ' ' .
                    'WHERE id=:id';
            echo $sql;
            $res = new DBConnection();
            $res->query($sql, $this->id, $values);
        }*/

       public function update($id)
        {
            /*$tokens = [];*/
            $values = [];
            $columns = [];
            foreach (static::$columns as $column) {
                /*$tokens[] = ':' . $column;*/
                $values[':' . $column] = $this->$column;
                $columns[] = $column . '=:' . $column;
            }
            $sql = 'UPDATE' . ' ' . static::$table . ' ' . 'SET' . ' ' . implode(',', $columns) . ' ' .
                'WHERE id=:id';
            echo $sql;
            $res = new DBConnection;
            $res->query($sql, $id, $values);
        }
}


/*class News extends AbstractModel
{
    static protected $table = 'news';

}
var_dump(News::findAll());
var_dump(News::findByPk(2));*/
