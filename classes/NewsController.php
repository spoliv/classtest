<?php
class NewsController
    extends AController
{
    protected function actionAll(/*$st*/)
    {
        $view = new View('view/indexv.php');
        $view->news = Articles::findAll()/*$st/*$allnews->All_news()*/;
        $view->display();
    }

    protected function actionOne()
    {
        $oneart = new View('view/article.php');
        if(isset($_GET['id'])) {

            $oneart->article = Articles::findByPk($_GET['id'])/*$st*//*$onearticle->One_news())*/;
        }
        $oneart -> display();
    }

    protected function actionAdd(/*$st*/)
    {
        $addart = new View('view/forms.php');
        $addart->display();

        if (isset($_POST['text']) && isset($_POST['title'])) {

            /*$st/*$addarticle -> Add_news()*/;

            $article = new Articles();
            $article->title = $_POST['title'];
            $article->text = $_POST['text'];
            $article->save();
        }
    }
}
