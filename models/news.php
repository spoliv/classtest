<?php
/*require_once '/classes/DB.php';*/

$allnews = new DB('localhost', 'root', '', 'test');

$allnews -> table = "SELECT * FROM news";

$addarticle = new DB('localhost', 'root', '', 'test');

$tit = $_POST['title'];

$txt = $_POST['text'];

$addarticle->table = "INSERT INTO news(title, text) VALUES ('$tit', '$txt')";


$onearticle = new DB('localhost', 'root', '', 'test');

$id = $_GET['id'];

$onearticle->table = "SELECT*FROM news WHERE id = $id";










/*require_once __DIR__ . '/../classes/DB.php';*/
    /*$basaone = new DB('localhost', 'root', '', 'test');
    $basaone -> table = "SELECT * FROM news";
    $news = $basaone -> All_news();
    $basaone -> table = "INSERT INTO news('title', 'text') VALUES ($tit, $txt)";
    $basaone -> Add_News();*/

/*require_once __DIR__ . '/../classes/View.php';*/

    /*$st = new View('view/indexv.php');
    $st->article = $news;*/
/*$st -> article = [
    ['title' => 'Новость1', 'text' => 'Новые санкции'],
    ['title' => 'Новость2', 'text' => 'Новые санкции в действии']
    ];
echo 'Статей в Storage' . "\n" . $st ->count() . "<br />";
/*var_dump($st->template);*/