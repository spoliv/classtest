<?php
class NewsController
    extends AController
{
    protected function actionAll()
    {
        $view = new View('localhost', 'root', '', 'test');
        $view -> table = "SELECT * FROM news";
        $articles = $view -> All_news();
        include 'view/index.php';
    }
    protected function actionOne()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $one_view = new View('localhost', 'root', '', 'test');
            $one_view -> table = "SELECT * FROM news WHERE id = $id";
            $article = $one_view -> News_getOne();
        }
        include 'view/article.php';
    }
    protected function actionAdd()
    {
        include 'view/forms.php';
        if (isset($_POST['text']) && isset($_POST['title']))
        {
            $tit = $_POST['title'];
            $txt = $_POST['text'];
            $add_view = new View('localhost', 'root', '', 'test');
            $add_view -> table = "INSERT INTO news(title, text) VALUES ('$tit', '$txt')";
            $add_view->Add_news();
        }
    }
}
