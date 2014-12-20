<?php
include 'view/forms.php';
require_once 'boot.php';

    if (isset($_POST['text']) && isset($_POST['title']))
    {
        $tit = $_POST['title'];
        $txt = $_POST['text'];
        $add_view = new View('localhost', 'root', '', 'test');
        /*$viewad -> tit = $_POST['title'];
        $viewad -> txt = $_POST['text'];*/
        $add_view -> table = "INSERT INTO news(title, text) VALUES ('$tit', '$txt')";
        $add_view->Add_news();
    }

