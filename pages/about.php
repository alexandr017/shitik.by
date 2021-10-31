<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content', 'about']);
include DOCUMENT_ROOT . '/view/v3/head.php';
?>
<body>
<?php include DOCUMENT_ROOT . '/view/v3/menu.php'; ?>

<main class="container">
    <ul class="breadcrumb">
        <li><a href="/">Главная</a></li>
        <li class="active">Шитик Александр Андреевич</li>
    </ul>

    <div class="content">
        <h1>Шитик Александр Андреевич</h1>
        <h2>Общая информацию</h2>
        <img src="/themes/v3/images/about/photo.jpg" alt="Шитик Александр Андреевич" style="width: 250px;margin-right: 15px;margin-bottom: 15px;max-width: 100%;float: left;">
        <p>Всем привет :) <i class="small-mob"></i> Меня зовут Саша, и я автор и создатель сайта shitik.by.</p>
        <p>В период с 2012 по 2014 занимался программированием десктопных программ для ОС Windows.<br>
            С 2014 стал заниматься преимущественно веб - разработкой. В период с 2014 по 2017 годы работал в одной из веб-студий Минска и принял участие в более сотни проектов, поэтому с 2017 я просто перестал их считать :) .<br>
            С 2017 года стал работать над финансово — экономическим сайтом из России, который к настоящему времени разросся до достаточно большого проекта, а я из обычного middle-программиста дорос до главы отдела разразобочки.</p>

        <div style="clear: both"></div>
        <h2>Интересы</h2>
        <ul>
            <li>Путешествую</li>
            <li>Бегаю по улице 10-14 км (даже зимой)</li>
            <li>Играю и c 2003 года смотрю футбол</li>
            <li>Занимаюсь коллекционирование</li>
            <li>Ненавижу читать книги, но ежегодно  читаю по 20-30 книг</li>
            <li>Занимаюсь планированием и саморазвитием</li>
            <li>Вёл канал на ютубе</li>
            <li>Люблю астрофизики и космос</li>
            <li>Обожаю собак и прогулки</li>
            <li>Пишу статьи</li>
            <li>Пересмотрел топ 250 легендарных фильмов IMDb и смотрю Кинопоиск</li>
            <li>Не пойду в кинотеатр пока не гляну режиссера и актеров</li>
            <li>Слушаю Рок музыку</li>
            <li>Слушаю подкасты, читаю статьи и книги, смотрю обучающее видео и конференции по программированию.</li>
            <li>Ранее активно смотрел WWE</li>
            <li>Нет пакета с пакетами</li>
        </ul>

        <h2>Образование</h2>
        <p><b>Оршанский колледж "ВГУ им. П.М.Машерова"</b><br>
        <span>Период:</span> 2009-2013<br>
        <span>Специальность:</span> Программное обеспечение информационных технологий<br>
        <span>Квалификация:</span> техник-программист</p>
        <p><b>Белорусский государственный университет информатики и радиоэлектроники (БГУИР)</b><br>
        <span>Период:</span> 2009-2013<br>
        <span>Специальность:</span> Программное обеспечение информационных технологий<br>
        <span>Квалификация:</span> инженер-программист</p>

        <h2 class="text-center title">Обратная связь</h2>
        <p>
            <b>inst:</b><a href="https://www.instagram.com/shitik.sasha" target="_blank">shitik.sasha</a><br>
            <b>telegram:</b><a href="https://t.me/sasha_shitik" target="_blank">@sasha_shitik</a><br>
            <b>vk:</b><a href="http://vk.com/alex0117" target="_blank"> alex0117</a>
        </p>
    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>