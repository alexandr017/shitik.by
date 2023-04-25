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
            <li><a href="#a-2">Как я к этому пришел</a></li>
            <li><a href="#a-3">Как я выбирал</a></li>
            <li><a href="#a-4">Что в итоге получилось</a></li>
        </ul>

        <h2 id="a-1">Введение</h2>
        <div><img style="max-height: 450px; margin: auto" class="post-img" src="/images/blog/home-bay/home-bay.jpeg" alt="Он нам нах не нужен ваш интерен" loading="lazy"></div>
        <blockquote class="blockquote">
            <p>Интернет они бл**ь ставят, интернет! Он нам на**й не нужен, интернет ваш!</p>
            <cite>Какая-то бабка из мемного видео</cite>
        </blockquote>
        <p>Знала бы эта бабуля, что вполне легально можно зарабатывать через интернет 🌐 в месяц столько, сколько она не получается пенсии за год наверное ее отношение к интернету бы изменилось. А ведь дело не только в заработке, это отличная площадка и бездонная библиотека 📚 для тех, кто хочет научится чему-то больше. Так сложилось, что мой доход напрямую зависит он интернета, поэтому не будь его, наверно не было бы у меня все еще квартиры 🤔, этой статьи, да и моего сайта в целом.</p>
        <p>Согласно древне вавилонским мудростям на глиняных дощечках, которые легли в основу хорошей книги “Самый богатый человек в Вавилоне” одна из них гласит, что любой человек (или семья если человек в браке) должен обзавестись собственных жильем 🏡. В наше время эта фраза так же сильно актуальна. Признайтесь, что любой человек, у которого нет собственного жилья мечтает о нем, какое бы оно не было: будь то роскошная вилла или однокомнатная квартира или небольшой дом.</p>

        <h2 id="a-2">Как я к этому пришел</h2>
        <p>Пожалуй я не был исключением и меня также часто посещали данные мысли, и чем старше я становился тем чаще такие мысли заходили в гости в мой мозг (ведь через полтора года исполнится 30 лет, что не так уж и мало). Масла в огонь подливала и ситуация за окном, ведь у меня были проблемы с банком 🏛 на ровном месте, нет гарантии что твои честно заработанные деньги не изымет банк или милиция из под матраса по какому-нибудь донесению. Поэтому хотелось как можно скорее избавиться от денег 💵 и вложить их. И вот наконец-то после 2ух долгих лет пристального коллекционирования денег я насобирал без кредитов и ипотек нужную сумму на то, чтобы купить двухкомнатную квартиру в моем любимом городе Беларуси - Минске.</p>
        <p>Знаете как я этого добился? Все очень просто 🤷‍♂️:</p>
        <ol>
            <li>Нужно ходить в магазин со своим пакетом (в моем случае рюкзаком) 🎒</li>
            <li>Нужна 2 раза заваривать чайные пакетики 🍵</li>
            <li>Незначительный фактор: нужно хорошо зарабатывать 💰</li>
        </ol>

        <h2 id="a-3">Как я выбирал</h2>
        <p>Как вы уже знаете, я планирую 📆 почти все наперед. Месяц и уж тем более год покупки я уже знал еще задолго до того как насобирал эту сумму. Ведь я знал свои доходы и расходы (к слову расходы я уже более года фиксирую и слегка анализирую и корректирую по возможности).</p>
        <p>Так как я технарь 💻 до мозга костей к покупке я так же подошел с весьма технической части. Во-первых я записывал список понравившихся квартир в эксель-файл 📊, что вполне логично и так наверно поступил бы каждый. Однако при занесении я выделил для себя 3 категории / “уровня” (зеленый, желтый и красный) 🚥. Как вы уже могли догадаться зеленый - иди, красный - стой))… А если серьезно, то зеленый - квартира понравилась, желтый - вполне приметлива, красный - не очень. Помимо этого я составил для себя список приоритетов и отсортировал их в порядке важности, где в начале шли самые важные 📉. Список выглядел примерно следующим образом:</p>
        <ul>
            <li>Уровень (зеленый, желтый, красный)</li>
            <li>Год постройки (не старый)</li>
            <li>Низкий этаж (например сейчас живя на 7м этаже я трачу 43 секунды на работу лифта)</li>
            <li>Окна на дорогу (а не двор)</li>
            <li>Восточная часть (города)</li>
            <li>Транспортное сообщение (автобусы, трамваи, троллейбусы, электробусы, маршрутки, НЛО, телепорт, кротовые норы (червоточины))</li>
            <li>Парковка (большая / хорошая)</li>
            <li>Метро (близко)</li>
            <li>Чистая вода</li>
            <li>Пиццерия (рядом)</li>
            <li>Магазины</li>
            <li>Стадион</li>
            <li>Парки</li>
        </ul>
        <p>Далее напротив каждого приоритета я выставлял цифры важности в порядке убывания скажем у уровня была цифра 12, далее год постройки - 11 и так далее до конца списка. </p>
        <p>Далее я составлял итоговую таблицу, где напротив каждой квартиры я писал все приоритеты (получалась полноценная таблица, где строками были квартиры 🏘, а столбцами приоритеты ❗️). После этого на пересечении квартиры и приоритета (если тот или иной приоритет был у квартиры) я отмечал ✅ плюсиком в ячейке. Таким образом зная какие приоритеты были у той или иной квартиры, а также ценность этого приоритета я смог получить по каждой квартире оценку в виде сумы приоритетов, которыми обладает квартира. Чем больше была оценка 🔟, тем больше мне подходила квартира. Стоит сразу сказать, что идеальных вариантов не было, однако в ТОПы попала даже несколько квартир их красной зоны, ведь остальные приоритеты были более чем в порядке. Порядка из 30 квартир с большим отрывом лидировали 3.  Потом еще 3-4 были тоже с хорошим рейтингом и дальше остальные все ниже и ниже.</p>
        <div><img style="max-height: 450px; margin: auto" class="post-img" src="/images/blog/home-bay/home-bay-2.jpg" alt="Покупка квартиры" loading="lazy"></div>


        <h2 id="a-4">Что в итоге получилось</h2>
        <p>За время просмотра даже вполне хороших и дорогих квартир я все чаще ловил себя на мысли, что даже тот красивый ремонт не совсем мне нравится. Где-то розовые обоих 🖼, потому что в семье дети девочки 🧸, где-то тип покрытия на полу, цвет плитки в ванной и тд. По этому после просмотра всех более-менее подходящих квартир я уже отдавал предпочтение квартирам с более плохим состоянием и соответственно более дешевым, чтобы в последствии сделать ремонт 🔨 на свой вкус. Доверившись своему алгоритму я купил по сути самую первую подходящую квартиру, тем самым сэкономив порядка 10-15$ тыс. Возможно это первый случай, когда некая искусственная система 🤖 повлияла на мой выбор в столь важный и ответственный момент 👀, однако в любом случае конечное принятие решения оставалось за мной. И меня вариант алгоритма более чем устраивал.</p>
        <p>На момент доведения чернового вариант в полноценную статью уже во всю идет ремонт. К нему я так же подошел по-технарски: уже составлен и отсортирован по работам список 📝 из пунктов 25-30, что нужно сделать до того как я заселюсь. Но это уже совсем другая история.</p>
    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>

