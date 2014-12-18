<html>
<head>
    <title>Новости</title>
</head>
<body>
    <?php foreach ($articles as $art): ?>
    <article>
        <h1><?= $art['title']; ?></h1>
        <div><?= $art['text'];?></div>
    </article>
<?php endforeach; ?>
</body>
</html>