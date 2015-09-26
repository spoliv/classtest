<?php
class NewsController
    extends AController
{
    protected function actionAll($st)
    {
        $view = new View('view/indexv.php');
        $view->news = $st/*$allnews->All_news()*/;
        $view->display();
    }

    protected function actionOne($st)
    {
        $oneart = new View('view/article.php');
        if(isset($_GET['id'])) {

            $oneart->article = $st/*$onearticle->One_news()*/;
        }
        $oneart -> display();
    }

    protected function actionAdd($st)
    {
        $addart = new View('view/forms.php');
        $addart->display();

        if (isset($_POST['text']) && isset($_POST['title'])) {

            $st/*$addarticle -> Add_news()*/;
        }
    }
}
