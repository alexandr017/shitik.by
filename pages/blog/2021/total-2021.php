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
            <li><a href="#a-3">Еда, здоровье</a></li>
            <li><a href="#a-4">Игры</a></li>
            <li><a href="#a-5">Образование</a></li>
            <li><a href="#a-6">Фильмы и сериалы</a></li>
            <li><a href="#a-7">Перемещение</a></li>
        </ul>

        <h2 id="a-1">Введение</h2>
        <p>Конец декабря 🎄. Самое время подвести итоги ✔️ уходящего года и так как я до мозга костей технарь многие цели и просто показатели я документировал 🖊️.</p>

        <p>Пожалуй начнем с целей на год. У меня было 5 основных целей и еще 3 второстепенных. Я не могу раскрыть их, по этому я буду просто их нумеровать.</p>

        <p>
        ✅ Цель 1 - достигнута на 100%<br>
        ✅ Цель 2 - достигнута на 100%<br>
        ✅ Цель 3 - достигнута на 100%<br>
        ✅ Цель 4 - достигнута на 100%<br>
        ✅ Цель 5 - достигнута на 95%<br><br><br>
        ✅ Второстепенная цель 1 - достигнута на 100%<br>
        👌Второстепенная цель 2 - не измерима<br>
        👌Второстепенная цель 3 - не измерима<br>
        </p>

        <p>Год запомнился многими важными и интересными событиями. Я приобрел свою первую собственную квартиру 🏠. У меня была незабываемое мини путешествие ✈️ в Новосибирск и Алтай, где я впервые за 4 года увидел своих коллег, которые уже давно стали больше, чем просто коллеги. За 2021 год в моем блоге 🌐 вышла 14 новых постов, включая этот.</p>
        <p>Помимо целей я вел статистику некоторых событий своей жизни за текущий год. Вот некоторые из них, что можно раскрыть.</p>

        <h2 id="a-2">Спорт</h2>
        <p>У меня было 28 пробежек 🏃, общей продолжительностью 323 км 🚏. За 3.5 года общее расстояние составило 969 км. Более подробно о моих пробежал этого года можно почитать в <a href="/blog/run-2021" target="_blank">отдельной статье</a>. Там же есть куча интересных графиков. Так же как бы стыдно не было сыграл всего 4 игры в футбол ⚽, что ничтожно мало.</p>

        <h2 id="a-3">Еда, здоровье</h2>
        <p>За весь прошлый год я не выпил ни одной таблетки 💊. Также в прошлом году я не съел ни одной почки чипсов и роллтона 🥡. Не выпил ни одного литра колы, фанты, спрайта или любой другой газировки 🥤. Выпил примерно 49 литров сока 🍵. Употреблял алкоголя 18 дней в году 🍷. Нет не подряд. Так же набрал чуть более 2.5 килограмм веса.</p>

        <div><img src="/images/blog/2021/total-2021/drunk.jpeg" alt="Алко календарь"></div>

        <h2 id="a-4">Игры</h2>
        <p>Не играю в компьютерные игры вообще 🙅‍♂️, да и в мобильные тоже. Одна из немногих игр, что установлена у меня это судоку, в которую за год я сыграл 31 раз, выиграл 31 партий 🎮.</p>

        <div><img src="/images/blog/2021/total-2021/sudoku.jpeg" alt="Судоку"></div>

        <h2 id="a-5">Образование</h2>
        <p>Наверно невозможно точно посчитать сколько выпусков разных подкастов я послушал, сколько видео пересмотрел и сколько статей и постов почитал. Однако, что точно можно сосчитать так это книги. В 2021 году я прочил 30 книг 📚. Более детально с книгами можно ознакомится в <a href="/blog/books-2021" target="_blank">подробной статье</a>.</p>

        <h2 id="a-6">Фильмы и сериалы</h2>
        <p>Вдогонку культовых фильмов IMDb 250 я осилил Кинопоиск 250 🎦. И об этом тоже есть <a href="/blog/kinopoisk-250" target="_blank">отдельная подробная статья</a>. Я не смотрю умышленно сериалы как средство убивания личного времени и скоротания вечеров. Однако для более лучшего усвоения английского языка и понимания речи я регулярно их смотрю. Как правило это сериалы с одним сезоном до 10 серий. Вот перечень того что я посмотрел или как минимум начинал смотреть. Отметки вполне понятны: зеленый - понравился сериал, желтый - неплохой, красный - не понравился.</p>

        <div><img src="/images/blog/2021/total-2021/movies.jpeg" alt="Сериалы"></div>

        <h2 id="a-7">Перемещение</h2>
        <p>Единственное что можно было эффективно посчитать это поездки на такси 🚕, которых за год у меня набралось 25.</p>

    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>

