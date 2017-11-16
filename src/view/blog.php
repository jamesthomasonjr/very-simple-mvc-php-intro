<html>
    <head>
        <title><?= $context['title'] ?></title>
    </head>
    <body>
        <?php foreach ($context['posts'] as $post) { ?>
            <p><?= $post ?></p>
        <?php } ?> 
    </body>
</html>
