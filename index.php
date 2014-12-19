<?php
require 'boot.php';
$view = new View('localhost', 'root', '', 'test');
/*$view -> articles = [
    ['title' => 'Первая новость', 'text' => 'Новые санкции к России'],
    ['title' => 'Вторая новость', 'text' => 'Россия справится'],
    ['title' => 'Третья новость', 'text' => 'Всем злопыхателям назло'],
    ['title' => 'Новость дня', 'text' => 'Прессконференция Президента'],
    ['title' => 'News of the week', 'text' => 'President meeting'],
];*/
$view -> table = "SELECT * FROM news";
$articles = $view -> All_news();
/*var_dump($articles);*/
/*$view -> display('view/index.php');*/
include 'view/index.php';