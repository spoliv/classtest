<?php
/*require_once __DIR__ . '/Storage.php';*/
/*require_once __DIR__ . '/DB.php';*/


class View
    extends Storage
    /*extends DB*/
{
    public $template;

    /*public $articles;*/
    public function __construct($template)
    {
        /*parent:: __construct($host, $user, $password, $dbname);*/
        $this->template = $template;
    }

    public function display()
    {
        /*ob_start();*/ // это для буферизации
        foreach ($this as $k => $v) {

            $$k = $v;
        }
        include '/' . $this->template;
        /*$ret = ob_get_contents();
        ob_end_clean();
        return $ret;*/
    }

}