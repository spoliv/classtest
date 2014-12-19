<?php
    require_once __DIR__ . '/../classes/DB.php';
    $basaone = new DB('localhost', 'root', '', 'test');
    $basaone -> table = "SELECT * FROM news";
    $news = $basaone -> All_news();
    $basaone -> table = "INSERT INTO news('title', 'text') VALUES ($tit, $txt)";
    $basaone -> Add_News();

