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
    <div class="content">
        <h1><?php echo getSeoField('h1') ?></h1>
        <time datetime="<?php echo getSeoField('date.htmlFormat') ?>" class="date-pub"><?php echo getSeoField('date.viewFormat') ?></time>
        <span class="h2">Содержание</span>
        <ul class="post-nav">
            <li><a href="#a-1">Введение</a></li>
            <li><a href="#a-2">Спорт</a></li>
            <li><a href="#a-3">Работа</a></li>
            <li><a href="#a-4">Еда, здоровье</a></li>
            <li><a href="#a-5">Игры</a></li>
            <li><a href="#a-6">Образование</a></li>
            <li><a href="#a-7">Фильмы и сериалы</a></li>
            <li><a href="#a-8">Перемещение</a></li>
        </ul>

        <h2 id="a-1">Введение</h2>
        <p>2022 прошел, а значит пора подводить итоги года. Как и несколько предыдущих лет я досконально документирую многие вещи.
            Мой слоган года был не самый приятный и если бы у меня спросили как я мог бы его охарактеризовать я бы воспользовался цитатой Яшина (нет не футболиста) “Нет уверенности в завтрашнем дне”. Хотя в некоторых отдельных компонентах для меня 2022 год был счастливым и вполне успешным.</p>

        <p>Как и предыдущие годы я ставил цели и задачи, которые старался закрыть в течении года. По традиции с их и начнем.</p>

        <p>Из 6ти основных целей:<br>
            ✅ Цель 1 - достигнута на 100%<br>
            ✅ Цель 2 - достигнута на 100%<br>
            ✅ Цель 3 - достигнута на 82%<br>
            ✅ Цель 4 - достигнута на 100%<br>
            ✅ Цель 5 - достигнута на 100%<br>
            ❌ Цель 6 - перенесена на следующий год
        </p>

        <p>По 6 второстепенным целям, которые не особо можно измерить также попробую подвести итоги:<br>
            ❌ Цель 1 - в течении года сильно изменилась<br>
            ✅ Цель 2 - достигнута<br>
            ✅ Цель 3 - достигнута<br>
            ❌ Цель 4 - не выполнена и перенесена на следующий год<br>
            ✅ Цель 5 - достигнута<br>
            ✅ Цель 6 - достигнута
        </p>

        <p>Я бы назвал свой 2022 год годом покупки второго авто, причем нового из салона. Также стоит отметить окончание ремонта в квартире, на который ушло чуть меньше 50 000$. На протяжении уже 8 лет из всех целей я всегда выделял наиболее приоритетную и называл в честь ее весь год.</p>

        <p>2015 Год теории веб-программирования<br>
            2016 Год углубленной теории веб-программирования<br>
            2017 Год практики веб-программирования<br>
            2018 Год социализации<br>
            2019 Год путешествий<br>
            2020 Год чтения IT-книг<br>
            2021 Год покупки первой квартиры<br>
            2022 Год покупки машины из салона</p>

        <div><img src="/images/blog/total-2022/auto.jpeg" alt="Новое авто"><br>Обе мои :)<br><br></div>

        <p>Также стоит отметить, что я отошел от ежедневных, еженедельных и ежемесячных задач в пользу другой более удобной для меня программы. Поэтому сейчас на моем рабочем столе нет стикеров, но есть другая постоянно запущенная программа с упорядоченными задачами и планами.</p>

        <h2 id="a-2">Спорт</h2>
        <p>В этом году как и в прошлом у меня было 28 пробежек общей продолжительностью 341 км. Если брать суммарный километраж за 4.5 года, то я уже набегал 1310 км. Более детально о всех моих пробежал этого года можно почитать в <a href="/blog/run-2022" target="_blank">отдельной статье</a>. В ней же есть несколько интересных графиков.</p>

        <h2 id="a-3">Работа</h2>
        <p>На работе меня повысили до технического директора. Впрочем это всего-лишь формальность, ведь посуди я продолжил заниматься тем же, чем и занимался до этого на протяжении предыдущих лет. Также стоит отметить, что в этом году я начал передавать свои знания другим. Во-первых у меня в этом году было 3 презентации для сотрудников компании по сравнению с одной в прошлом. Темы этих презентаций следующие:</p>
        <ul>
            <li>Микро-сервисы и монолиты. SPA-приложения. PWA-приложения. (2021)</li>
            <li>Операция на открытом сердце. Поздний аборт или как мы вынашивали и родили дизайн (2022)</li>
            <li>Технические и технологические улучшения ВЗО (2022)</li>
            <li>Основы компьютерной безопасности. Никогда не доверяйте пользователям (2022)</li>
        </ul>
        <p>Плюс с большой долей вероятности будет несколько презентаций в 2023 году.
            Во-вторых внутри компании мы запустили полноценный курс по программированию, где я обучаю около 8-10 коллег из других отделов программированию. По окончанию курса мы планируем выдать сотрудникам сертификаты о прохождении курса. Если курс зайдет, то впереди возможны и другие курсы с другой программой обучения.</p>

        <h2 id="a-4">Еда, здоровье</h2>
        <p>Если в прошлом году я не выпил ни одной таблетки, то в этом пришлось с десяток принять. Целых два раза я умудрился простудится в первой половине года и ближе к концу года, но в каждый раз поправлялся за 2-3 дня. Я попрежнему за год не купил и не выпил ни одного литра газировки: спрайта, колы, фанты чему очень рад. Если в прошлом году у меня получалось посчитать количество сока, то в этом это было сделать крайне тяжело. За год я набрал примерно 1.5 кг. Также я отмечал дни когда принимал алкоголь. На этот раз без яркого и красивого календарика.</p>
        <p>
            Январь: 4, 5, 16, 17, 28<br>
            Февраль: 4, 14<br>
            Март: 8<br>
            Апрель: 5<br>
            Май: 1, 22, 26<br>
            Июнь: 3, 26<br>
            Июль: 15<br>
            Август: 20, 25<br>
            Сентябрь: 16, 22<br>
            Октябрь: -<br>
            Ноябрь: 19<br>
            Декабрь: 1, 17, 24, 31
        </p>
        <p>Если в прошлом году было 18 дней, когда я употреблял алкоголь, то в этом 24. Конкретно спился :). Хотя стоит отметить, что в статистику попали дни, когда я выпивал хотя бы 1 коктейль. В прочем это и есть почти все дни из списка выше.</p>

        <h2 id="a-5">Игры</h2>
        <p>Как я уже писал в итоговой статье <a href="/blog/total-2021">прошлого года</a> я по прежнему не играю в какие-либо игры. Если в прошлом году я играл в судоку на телефоне, то в этом я даже и это перестал делать. Однако так как в этом году я стал жить не один, то среди будних вечеров, когда оставались дома хорошо заходили пазлы. Все, кроме двух самых больших как раз и собрали в текущем году.</p>
        <div><img src="/images/blog/total-2022/puzzles.jpg" alt="Пазлы 2022" style="max-height: 800px; margin: auto; display: block;"></div>

        <h2 id="a-6">Образование</h2>
        <p>С образованием в 2022 все было также стабильно. Подкасты, статьи, книги. По книгам чуть ранее вышла отдельная более <a href="/blog/books-2022" target="_blank">подробная статья</a>.</p>

        <h2 id="a-7">Фильмы и сериалы</h2>
        <p>Если я и так очень мало смотрел сериалов ранее, то в 2022 стал смотреть еще меньше. Как и раньше главным и единственным источников сериалов останется Netflix. За прошлый год я успел посмотреть “Lupen”, "Vikings Valhalla”, “Wednesday” и очень коротко серийный “Человек против пчелы” с Роуэном Аткинсоном. Пересмотрел несколько десятков фильмов с IMDb.
            Сходил аж 14 раз в кинотеатр. Это были следующие фильмы и мультики:</p>
        <ul>
            <li>Последний богатырь: Посланник Тьмы</li>
            <li>Три богатыря и Конь на троне</li>
            <li>Вальдо</li>
            <li>Смерть на Ниле</li>
            <li>Флирт с дьяволом</li>
            <li>Мегрэ и таинственная девушка</li>
            <li>Операция «Мясной фарш»</li>
            <li>Четыре хороших дня</li>
            <li>Пропавшая</li>
            <li>Клаустрофобы. Долина дьявола</li>
            <li>Хранитель тайн</li>
            <li>Умереть за доллар</li>
            <li>Двойная петля</li>
            <li>Непослушник 2</li>
        </ul>
        <p>"Операция «Мясной фарш»" и “Двойная петля” были пожалуй лучшими, а вот “Последний богатырь: Посланник Тьмы” и “Непослушник 2” надо было умудрится снять такие плохие фильмы.</p>

        <h2 id="a-8">Перемещение</h2>
        <p>Как и в прошлом году посчитал поездки на такси. Несмотря на то, что у меня появилась вторая машина количество поездок на такси возросло с 25 до 116. Причем 107 пришлось на первые 9 месяцев года.</p>
    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>

