<?php
require_once __DIR__ . '/Storage.php';

class View
    extends Storage
{
    public function __construct($fold)
    {
        $this -> fold = $fold;
        return $fold;
    }
    public function display($template)
    {
        $articles = $this -> articles;
        include $this -> fold . $template;
    }
}