<?php
includeCSS(['modules/general', 'modules/fonts', 'index']);
include DOCUMENT_ROOT . '/view/v3/head.php';
?>
<body>
<div class="modules-wrap">
    <a href="/alexandr-andreevich" class="item lightning-effect"><span class="icon icon-man"></span>О себе</a>
    <a href="/blog" class="item lightning-effect"><span class="icon icon-blog"></span>Блог</a>
    <a href="/portfolio" class="item lightning-effect"><span class="icon icon-portfolio"></span>Портфолио</a>
    <a href="/travels" class="item lightning-effect"><span class="icon icon-travel"></span>Путешествия</a>
    <div class="item purple lightning-effect"><span class="icon icon-site"></span>Shitik.by</div>
    <a href="/projects" class="item lightning-effect"><span class="icon icon-projects"></span>Свои проекты</a>
    <a href="/library" class="item lightning-effect"><span class="icon icon-library"></span>Библиотека</a>
    <a href="/stats" class="item lightning-effect"><span class="icon icon-stats"></span>Статистика</a>
    <a href="/site" class="item lightning-effect"><span class="icon icon-web"></span>О сайте</a>
</div>
<?php include DOCUMENT_ROOT . '/view/v3/micro-data.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>