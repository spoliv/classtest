<?php
require __DIR__ . '/../boot.php';
abstract class AbstractModel
{
    static protected $table;
    /*static function getTableName()
    {
        return static::$table;
    }*/
    static function findAll()
    {
        $sql = 'SELECT * FROM' . static::$table;
        return new DBConnection($sql);
        /*var_dump($data);*/
    }
    /*static function findByPk($id)
    {
        $sql = 'SELECT * FROM' . static::$table . 'WHERE id = :id';
        return DBConnection::query($sql, $id);
    }*/

}

class News extends AbstractModel
{
    static protected $table = 'news';
}
var_dump(News::findAll());