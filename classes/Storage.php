<?php


class Storage

    implements Countable, Iterator
{
    private $__data = [];
    public function __set($key, $val)
    {
        $this -> __data[$key] = $val;
    }
    public function __get($key)
    {
        return $this -> __data[$key];
    }
     public function count()
    {
        return  count($this -> __data);
    }

    /*public function rewind()
    {
        reset($this -> __data);
    }*/
    public function current()
    {
        return current($this -> __data);
    }
    public function next()
    {
        next($this -> __data);
    }
    public function key()
    {
        return key($this -> __data);
    }
    public function valid()
    {
        if (key($this -> __data)!==null)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function rewind()
    {
        reset($this -> __data);
    }

}

    /*$rok = new Storage();
    $r = $rok->All_news();
    var_dump($r);*/
    // Проверка класса Storage и Магии и интерфейсов
    /*$st = new Storage();
    $st -> Новость1 = 'Новые санкции';
    $st -> Новость2 = 'В Москве полночь';
    $st -> Новость3 = 'Заканчиваю занятие';
    $st -> Новость4 = 'Добрый день';
    $st -> Новость5 = 'Отладка интерфейсов';
    $st -> Новость6 = 'Приступаем к шаблонам';
    $st -> Новость7 = 'Повторение - мать учения';

    assert(7 == count($st));

    echo 'Новостей в Storage' . "\n" . $st ->count() . "<br />";

/*foreach($st as $key => $value)
{
    echo $key . "\n";
    echo $value . "<br />";
}*/
