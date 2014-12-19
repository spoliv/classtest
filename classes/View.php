<?php
/*require_once __DIR__ . '/Storage.php';*/
require_once __DIR__ . '/DB.php';


class View
    /*extends Storage*/
    extends DB
{
    /*public $template;
    public $articles;
    public function __construct($template)
    {
        parent:: __construct($host, $user, $password, $dbname);
        $this -> template = $template;
        return $template;
    }
    public function display($template)
    {
        $articles = $this -> articles;
        include $this -> template;
    }*/
}