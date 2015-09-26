<html>
<head>
    <title>Новости</title>
</head>
<body>
<?php foreach ($news as $article): ?>
    <li>
        <h3>
            <a href="article.php/?id=<?=$article['id'];?>" target="_blank">
                <?=$article['title'];?>
            </a>
        </h3>
    </li>

<?php endforeach; ?>
</body>
</html>