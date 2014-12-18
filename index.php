<?php
 /*require_once __DIR__ . '/classes/View.php';*/
require 'boot.php';

$view = new View(__DIR__ . '/view/');
$view -> articles = [
    ['title' => 'Первая новость', 'text' => 'Новые санкции к России'],
    ['title' => 'Вторая новость', 'text' => 'Россия справится'],
    ['title' => 'Третья новость', 'text' => 'Всем злопыхателям назло'],
    ['title' => 'Новость дня', 'text' => 'Прессконференция Президента'],
    ['title' => 'News of week', 'text' => 'President meeting'],
];
$view -> display('index.php');
