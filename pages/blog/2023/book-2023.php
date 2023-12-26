<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content']);
include DOCUMENT_ROOT . '/view/v3/head.php';
$posts = getPosts();
?>
<body>
<?php include DOCUMENT_ROOT . '/view/v3/menu.php'; ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/">Главная</a></li>
        <li><a href="/blog">Блог</a></li>
        <li class="active"><?php echo getSeoField('h1') ?></li>
    </ul>
    <article class="content">
        <h1><?php echo getSeoField('h1') ?></h1>
        <time datetime="<?php echo getSeoField('date.htmlFormat') ?>" class="date-pub"><?php echo getSeoField('date.viewFormat') ?></time>

        //

    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
