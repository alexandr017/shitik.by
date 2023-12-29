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

        <p>В этом году я провел ревизию своих книг: удалил часть того, что точно не буду читать и вместе с этим скачал около 400 новых книг. Уже в момент скачивания я обращал внимание только на те, которые потенциально меня могли бы заинтересовать. Но даже 400 книг это было слишком много и по меркам текущей скорости чтения я бы прочитал их только через лет 15-20.</p>

        <p>Дальше началось самое интересное, но рутинное и местами неприятное. Сначала я еще раз отсеял совсем малую часть книг, которую по содержанию или по тому, что из книги невозможно скопировать текст, отсеял и удалил. Дальше начал подписывать правильно книги в формате “Автор - название”. После этого я разнес книги по приоритетам в 4 каталога (от 0 до 3), где 0 - самый важный для меня приоритет, а 3-ий совсем не важный. Но и это еще не все, далее в файле с учетом книг я создал вкладки согласно приоритетам и занес туда книги согласно их положению в приоритетных каталогах. Далее я беру книги на чтение уже из файла скорее по названию (ведь во время сортировки книг уже примерно есть понимание какую ты хочешь почитать в первую очередь, а какую в другую). В основном конечно за год вышло так, что я читал книги из нулевого приоритета, что и логично, но я также обязался брать пару книг из первого приоритета и еще пару и второго и третьего.</p>

        <p>Не знаю как на счет 15-20 лет, но на ближайшие 3-4 года я точно не буду искать книги для прочтения ибо уже вполне определился с тем что можно почитать. Дальше все же скорее всего придется список переработать и оставить актуальное ибо многие книги частично устаревают.</p>

        <p>Теперь непосредственно о том, что именно я читал в прошлом 2023 году. Всего я прочитал 20 книг, что на 2 книги меньше, чем в 2022, на 10 книг меньше, чем в 2021, и на 12 меньше, чем в 2020. С одной стороны очевидна тенденция на уменьшение чтения книг, но это меня все же не очень сильно смущает. Во-первых, я стал более осознанно читать и тщательно прорабатывать книгу после прочтения, как минимум сразу же перечитывая конспект, а как максимум и применения чего-то из книги в жизни. Во-вторых, никуда не делись конспекты за прошлые годы. А это более 80 книг, которые я слегка освежил и освежал каждый год в своей памяти. Так как в следующем году мне придется перечитывать уже более 100 конспектов, то я решил что не все конспекты буду перечитывать каждый год и какие-то конспекты (года) буду перечитывать раз в 2 или даже 3 года.</p>

        <p>Практически все книги, которые я прочитал в 2023 году, были очень неплохими и особых аутсайдеров не было. А вот среди лидеров тройку я бы выделил следующую:</p>

        <ul>
            <li>Сергей Язев	 - Мифы минувшего века</li>
            <li>Эд Кэтмелл, Эми Уоллес - Корпорация гениев. Как управлять командой творческих людей</li>
            <li>Джеймс Хьюмс - Секреты великих ораторов. Говори как Черчилль, держись как Линкольн</li>
        </ul>

        <p>В целом было много книг, которые мне понравились, но наверно именно эти топ 3 книги я бы рекомендовал почитать всем. Особенно первую. Не скажу, что ее автор донес до меня новую информацию, но написал почти все мысли, которые были у меня в голове по той проблематике, которая озвучена в книге.</p>

        <p>Ниже представлен весь полный перечень книг, которые я прочитал в 2023 году.</p>

        <img src="/images/blog/2023/books-2023/list.jpg" alt="Список книг 2023">
        <br>
        <br>
        <img src="/images/blog/2023/books-2023/books.jpeg" alt="Список книг 2023">

        <p>Также стоит отметить, что я завел отдельный <a href="https://www.instagram.com/books_re_views/" target="_blank">инстаграм-аккаунт для книг</a>, где кратко описываю о чем эта книга и кому она была бы интересна.</p>
    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
