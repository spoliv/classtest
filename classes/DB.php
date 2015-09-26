<?php
class DB
{
    public $host;
    public $user;
    public $password;
    public $dbname;
    public $table;
    /*public $tit;
    public $txt;*/

    public function __construct($host, $user, $password, $dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
        /*mysql_connect($host, $user, $password);
        mysql_select_db($dbname);*/

        mysql_connect($this->host, $this->user, $this->password);
        mysql_select_db($this->dbname);
    }
    public function Add_news()
    {
        mysql_query($this -> table);
    }

    public function All_news()
    {

        $res = mysql_query($this -> table);
        if (!$res)
        {
            echo mysql_error();
            return [];
        }

        $ret = [];
        while ($row = mysql_fetch_assoc($res))
        {
            $ret[] = $row;
        }
        return $ret;
    }

    public function One_news()
    {
        $res = mysql_query($this -> table);
        $row = mysql_fetch_assoc($res);
        return $row;
    }

}