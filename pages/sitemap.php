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
                    <li><a href="/blog/when-traveling-becomes-easy">Барьеры на пути к путешествиям</a></li>
                    <li><a href="/blog/books-2024">Результаты чтения книг в 2024 году</a></li>
                    <li><a href="/blog/trip-to-bali">Путешествие по Бали: воспоминания и открытия</a></li>
                    <li><a href="/blog/who-are-quadrobers">Откуда появились квадроберы?</a></li>
                    <li><a href="/blog/working-while-lying-on-the-beach">Почему работать на пляже — это не так удобно, как кажется</a></li>
                    <li><a href="/blog/names-of-hurricanes">Кто и как дает имена ураганам?</a></li>
                    <li><a href="/blog/national-vaccination-calendar">Национальный календарь прививок</a></li>
                    <li><a href="/blog/where-do-lefties-come-from">Откуда берутся левши?</a></li>
                    <li><a href="/blog/trip-to-georgia">Путешествие по Грузии: от Тбилиси до Батуми</a></li>
                    <li><a href="/blog/trip-to-azerbaijan">Путешествие по Азербайджану: от Баку до Мингечаура</a></li>
                    <li><a href="/blog/humanities-and-exact-sciences">Точные и гуманитарные науки: мой выбор и предпочтения</a></li>
                    <li><a href="/blog/short-cartoons">Смотрю краткометражки, но не те, о которых вы подумали</a></li>
                    <li><a href="/blog/time-magazine-person-of-the-year">Журнал Times. Человек года. Кому бы я отдавал премию</a></li>
                    <li><a href="/blog/steve-jobs-and-pixar">Не только Apple. Стив Джобс успешный владелец Pixar</a></li>
                    <li><a href="/blog/total-2023">Итоги 2023 года</a></li>
                    <li><a href="/blog/books-2023">Книжная статистика за 2023 год</a></li>
                    <li><a href="/blog/run-2023">Статистика бега за 2023 год</a></li>
                    <li><a href="/blog/tips-for-motorists">Неочевидные советы начинающим водителям</a></li>
                    <li><a href="/blog/fear-of-criticism">Страх перед критикой или почему люди гоняться за модой</a></li>
                    <li><a href="/blog/space-objects">Бытовые и медицинские предметы, которые появились благодаря изучению космоса</a></li>
                    <li><a href="/blog/following-in-the-footsteps-of-hocking-and-tyson">Иду по стопам Хокинга и Тайсона</a></li>
                    <li><a href="/blog/winning-lotteries">Выигрышные минские лотереи</a></li>
                    <li><a href="/blog/weight-and-mass">Почему некорректно спрашивать какой у тебя вес? Отсеиваем двоечников по физике</a></li>
                    <li><a href="/blog/marvel-and-dc-without-a-plot">Кризис идей и проблемы с сюжетом у Марвел и DC</a></li>
                    <li><a href="/blog/rich-brazil-and-argentina">Если бы у Бразилии и Аргентины было больше денег</a></li>
                    <li><a href="/blog/immediate-reward">Общество с немедленным вознаграждением</a></li>
                    <li><a href="/blog/kidney-stone">Камень в почках</a></li>
                    <li><a href="/blog/expensive-apartment-renovation">Результаты ремонта квартиры</a></li>
                    <li><a href="/blog/scrum-and-sprint-life">Жизнь по скраму со спринтами</a></li>
                    <li><a href="/blog/monopolies">Монополия лучше конкуренции?</a></li>
                    <li><a href="/blog/earth-overpopulation">Странности с перенаселением Земли</a></li>
                    <li><a href="/blog/does-the-soul-exist">Существует ли душа?</a></li>
                    <li><a href="/blog/car-in-winter">Почему водители не любят зиму?</a></li>
                    <li><a href="/blog/total-2022">Итоги моего 2022 года</a></li>
                    <li><a href="/blog/books-2022">Прочитанные книги в 2022 году</a></li>
                    <li><a href="/blog/run-2022">Результаты бега за 2022</a></li>
                    <li><a href="/blog/seo">Современная СЕО-оптимизация глазами программиста</a></li>
                    <li><a href="/blog/total-2021">Итоги моего 2021 года</a></li>
                    <li><a href="/blog/run-2021">Результаты бега за 2021</a></li>
                    <li><a href="/blog/kinopoisk-250">Мысли после просмотра 250 лучших фильмов кинопоиска</a></li>
                    <li><a href="/blog/books-2021">Прочитанные книги в 2021 году</a></li>
                    <li><a href="/blog/run-2018-2020">Статистика моего бега за 2.5 года</a></li>
                    <li><a href="/blog/people-without-food">Если бы люди не нуждались в еде</a></li>
                    <li><a href="/blog/seats-in-the-trolleybus">Места для инвалидов в троллейбусе</a></li>
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