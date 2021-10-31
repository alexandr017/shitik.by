<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content']);
include DOCUMENT_ROOT . '/view/v3/head.php';
?>
<body>
<?php include DOCUMENT_ROOT . '/view/v3/menu.php'; ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/">Главная</a></li>
        <li class="active">О сайте</li>
    </ul>
    <div class="content">
        <p>На данной странице будут представлены результаты проверки страниц сайта в различных валидаторах и инструментов тестирования. Пока что на сайте я не внедрял АМП-турбо и микроразметку, а все тесты скорости вместо google speed insight замерял в lighthouse. Тем не менее ниже вы можете видеть примеры валидации HTML кода страниц и замеры в lighthouse. В среднем они более чем хорошие, если не идеальные. Я стремлюсь сделать идаельными не только рабочие проекты, где от этого косвенно зависит моя з.п., но и личные проекты для своего душевного перфекционизма.</p>

        <table>
            <thead>
                <tr>
                    <td>Страница</td>
                    <td>HTML</td>
                    <td>lighthouse mob</td>
                    <td>lighthouse PC</td>
                </tr>
            </thead>
                <tbody>
                <tr>
                    <td>Главная</td>
                    <td><img src="/images/site/html/index.png" alt="Главная - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/index-mob.png" alt="Главная - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/index-pc.png" alt="Главная - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>О себе</td>
                    <td><img src="/images/site/html/about.png" alt="О себе - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="О себе - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="О себе - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Портфолио</td>
                    <td><img src="/images/site/html/portfolio" alt="Портфолио - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Портфолио - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Портфолио - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Путешествия</td>
                    <td><img src="/images/site/html/travels.png" alt="Путешествия - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Путешествия - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Путешествия - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Свои проекты</td>
                    <td><img src="/images/site/html/projects.png" alt="Свои проекты - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Свои проекты - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Свои проекты - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Библиотека</td>
                    <td><img src="/images/site/html/library.png" alt="Библиотека - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Библиотека - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Библиотека - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Статистика</td>
                    <td><img src="/images/site/html/stats.png" alt="Статистика - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Статистика - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Статистика - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Карта сайта</td>
                    <td><img src="/images/site/html/sitemap.png" alt="Карта сайта - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Карта сайта - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Карта сайта - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>О сайте</td>
                    <td><img src="/images/site/html/site.png" alt="О сайте - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="О сайте - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="О сайте - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Блог (главная)</td>
                    <td><img src="/images/site/html/blog.png" alt="Блог (главная) - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/blog-index-mob.png" alt="Блог (главная) - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/blog-index-pc.png" alt="Блог (главная) - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Если бы люди не нуждались в еде</td>
                    <td><img src="/images/site/html/blog-people-without-food.png" alt="Если бы люди не нуждались в еде - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Если бы люди не нуждались в еде - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Если бы люди не нуждались в еде - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Места для инвалидов в троллейбусе</td>
                    <td><img src="/images/site/html/blog-seats-in-the-trolleybus.png" alt="Места для инвалидов в троллейбусе - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Места для инвалидов в троллейбусе - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Места для инвалидов в троллейбусе - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Наш ответ Marvel и DC</td>
                    <td><img src="/images/site/html/blog-new-super-heroes.png" alt="Наш ответ Marvel и DC - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Наш ответ Marvel и DC - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Наш ответ Marvel и DC - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Первая квартира</td>
                    <td><img src="/images/site/html/blog-home-bay.png" alt="Первая квартира - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Первая квартира - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Первая квартира - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Обновление сайта</td>
                    <td><img src="/images/site/html/blog-site-update.png" alt="Обновление сайта - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Обновление сайта - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Обновление сайта - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Моя черная полоса</td>
                    <td><img src="/images/site/html/blog-black-lines.png" alt="Моя черная полоса - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Моя черная полоса - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Моя черная полоса - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Новый личный беговой рекорд</td>
                    <td><img src="/images/site/html/blog-run.png" alt="Новый личный беговой рекорд - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Новый личный беговой рекорд - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Новый личный беговой рекорд - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Мысли после просмотра 250 лучших фильмов всех времен</td>
                    <td><img src="/images/site/html/blog-movies-imdb.png" alt="Мысли после просмотра 250 лучших фильмов всех времен - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Мысли после просмотра 250 лучших фильмов всех времен - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Мысли после просмотра 250 лучших фильмов всех времен - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Обучение через подкасты</td>
                    <td><img src="/images/site/html/blog-podcasts.png" alt="Обучение через подкасты - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Обучение через подкасты - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Обучение через подкасты - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Треть сотни книг за 11 месяцев</td>
                    <td><img src="/images/site/html/blog-books-2020.png" alt="Треть сотни книг за 11 месяцев - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Треть сотни книг за 11 месяцев - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Треть сотни книг за 11 месяцев - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Планирование как степень достижения целей</td>
                    <td><img src="/images/site/html/blog-planning.png" alt="Планирование как степень достижения целей - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Планирование как степень достижения целей - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/" alt="Планирование как степень достижения целей - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Мои мысли о коронавирусе</td>
                    <td><img src="/images/site/html/blog-koronavirus.png" alt="Мои мысли о коронавирусе - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/blog-koronavirus-mob.png" alt="Мои мысли о коронавирусе - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/blog-koronavirus-pc.png" alt="Мои мысли о коронавирусе - lighthouse" loading="lazy"></td>
                </tr>
                <tr>
                    <td>Напутствие будущим программистам</td>
                    <td><img src="/images/site/html/blog-students.png" alt="Напутствие будущим программистам - html валидатор" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/blog-students-mob.png" alt="Напутствие будущим программистам - lighthouse" loading="lazy"></td>
                    <td><img src="/images/site/lighthouse/blog-students-pc.png" alt="Напутствие будущим программистам - lighthouse" loading="lazy"></td>
                </tr>
                </tbody>
        </table>

    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>


