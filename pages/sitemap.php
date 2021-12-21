<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content']);
include DOCUMENT_ROOT . '/view/v3/head.php';
?>
<body>
<?php include DOCUMENT_ROOT . '/view/v3/menu.php'; ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/">Главная</a></li>
        <li class="active">Карта сайта</li>
    </ul>
    <div class="content">
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/alexandr-andreevich">О себе</a></li>
            <li><a href="/portfolio">Портфолио</a></li>
            <li><a href="/travels">Путешествия</a></li>
            <li><a href="/projects">Свои проекты</a></li>
            <li><a href="/library">Библиотека</a></li>
            <li><a href="/stats">Статистика</a></li>
            <li><a href="/blog">Блог</a>
                <ul>
                    <li><a href="/blog/run-2021">Результаты бега за 2021</a></li>
                    <li><a href="/blog/kinopoisk-250">Мысли после просмотра 250 лучших фильмов кинопоиска</a></li>
                    <li><a href="/blog/books-2021">Прочитанные книги в 2021 году</a></li>
                    <li><a href="/blog/run-2018-2020">Статистика моего бега за 2.5 года</a></li>
                    <li><a href="/blog/blog/people-without-food">Если бы люди не нуждались в еде</a></li>
                    <li><a href="/blog/blog/seats-in-the-trolleybus">Места для инвалидов в троллейбусе</a></li>
                    <li><a href="/blog/new-super-heroes">Наш ответ Marvel и DC</a></li>
                    <li><a href="/blog/home-bay">Первая квартира</a></li>
                    <li><a href="/blog/site-update">Обновление сайта</a></li>
                    <li><a href="/blog/black-lines">Моя черная полоса</a></li>
                    <li><a href="/blog/run">Новый личный беговой рекорд</a></li>
                    <li><a href="/blog/movies-imdb">Мысли после просмотра 250 лучших фильмов всех времен</a></li>
                    <li><a href="/blog/podcasts">Обучение через подкасты</a></li>
                    <li><a href="/blog/books-2020">Треть сотни книг за 11 месяцев</a></li>
                    <li><a href="/blog/planning">Планирование как степень достижения целей</a></li>
                    <li><a href="/blog/koronavirus">Мои мысли о коронавирусе</a></li>
                    <li><a href="/blog/students">Напутствие будущим программистам</a></li>
                </ul>
            </li>
        </ul>
    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
