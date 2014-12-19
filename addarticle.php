<?php
include 'view/forms.php';
    if (isset($_POST['text']) && isset($_POST['title']))
    {
        $tit = $_POST['title'];
        $txt = $_POST['text'];
        require 'boot.php';
        $viewad = new View('localhost', 'root', '', 'test');
        $viewad->table = "INSERT INTO news('title', 'text') VALUES ($tit, $txt)";
        $viewad->Add_News();
    }