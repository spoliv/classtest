<?php
require 'boot.php';

// http://classtest/?r=news/all
$route = $_GET['r'];
$routeParts = explode('/', $route);
$controllerClassName = ucfirst($routeParts[0]) . 'Controller';
$actionName = $routeParts[1];

$controller = new $controllerClassName;
$controller -> action($actionName, $allnews -> All_news());


/*$controller = new NewsController();
$controller -> action('all', $allnews -> All_news());*/

/*$view->news = $allnews -> All_news();
$view->display();*/

// это для буферизации
/*$html = $view->display();
echo $html;*/