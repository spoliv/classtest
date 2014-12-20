<?php

    if(isset($_GET['id']))
        {
        $id = $_GET['id'];
        require 'boot.php';
        $one_view = new View('localhost', 'root', '', 'test');
        $one_view -> table = "SELECT * FROM news WHERE id = $id";
        $article = $one_view -> News_getOne();
        }
    include 'view/article.php';