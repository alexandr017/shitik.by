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

        <table border="1">
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
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>О себе</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Портфолио</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Путешествия</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Свои проекты</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Библиотека</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Статистика</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Карта сайта</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>О сайте</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Блог (главная)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Если бы люди не нуждались в еде</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Места для инвалидов в троллейбусе</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Наш ответ Marvel и DC</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Первая квартира</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Обновление сайта</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Моя черная полоса</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Новый личный беговой рекорд</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Мысли после просмотра 250 лучших фильмов всех времен</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Обучение через подкасты</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Треть сотни книг за 11 месяцев</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Планирование как степень достижения целей</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Мои мысли о коронавирусе</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Напутствие будущим программистам</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
        </table>

    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>


