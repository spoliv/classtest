<?php
/*include 'view/forms.php';*/
require_once 'boot.php';

$controller = new NewsController();
$controller->action('add'/*, $addarticle->Add_news()*/);

/*$addart = new View('view/forms.php');
$addart->display();

    if (isset($_POST['text']) && isset($_POST['title'])) {

        $addarticle -> Add_news();
}*/