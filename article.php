<?php
    /*require 'boot.php';
    $controller = new NewsController;
    $controller -> action(one);*/

require_once 'boot.php';

$controller = new NewsController();
$controller -> action('one', $onearticle -> One_news());


/*$oneart = new View('view/article.php');
    if(isset($_GET['id'])) {

        $oneart->article = $onearticle->One_news();
    }
$oneart -> display();*/
