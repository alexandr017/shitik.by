<?php
// todo сео заголовки
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/content']);
include DOCUMENT_ROOT . '/view/v3/head.php';
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
        <time datetime="2021-10-17" class="date-pub">16 июля 2022</time>
        <span>Содержание:</span>
        <ul class="post-nav">
            <li><a href="#a-1">Введение</a></li>
            <li><a href="#a-2">Теоретическая и техническая СЕО-оптимизации</a></li>
            <li><a href="#a-3">Триггеры для написания статьи</a></li>
            <li><a href="#a-4">Так что же не так с поисковиками?</a></li>
            <li><a href="#a-5">Какими я вижу поисковые системы</a></li>
            <li><a href="#a-6">Когда ждать улучшения</a></li>
            <li><a href="#a-7">СЕО по единым и светлым правилам</a></li>
            <li><a href="#a-8">Выводы</a></li>
            <li><a href="#a-9">И еще немного о поисковых системах</a></li>
        </ul>

        <h2 id="a-1">Введение</h2>
        <p>Уже около 5ти лет я работаю в продуктовой компании в области финансов, экономики и бизнеса. Помимо этой предметной области у нас есть вторая не менее важная - СЕО оптимизация 📈. Прошлой моей работой была веб-студия, для которой я пачками делал мелкие и средние сайты, часть из которых также была заточена на оптимизацию под поисковые системы. Отличие по качеству оптимизации в этих двух местах существенное. На текущей работе этому уделяется огромное внимание, и не зря, у нас всегда есть штат СЕОшников из 5-7 человек. Более того даже руководители компании также являются отличными СЕО-специалистами 👨‍💼. За это время я среди них наслушался немало умных слов, часть из которых хорошо усвоил.</p>
        <img class="post-img" src="/images/blog/seo/seo1.jpeg" alt="СЕО-оптимизации">

        <h2 id="a-2">Теоретическая и техническая СЕО-оптимизации</h2>
        <p>Из СЕО оптимизации я буду выделять два направления: первое это привычное для всех СЕО, которое буду называть теоретическим или просто обычным, и второе - техническое.</p>
        <p>Первое 📊 - это и есть то, чем занимаются все СЕОшники: анализ конкурентов, поисковых сервисов наподобие вордстата, составление семантического ядра и последующие работы до запуска сайта или конкретного раздела сайта.</p>
        <p>Второе ⚙️ же направление, которое я хочу выделить - техническое СЕО. На мой взгляд оно появилось сильно позднее теоретического ибо в первоначальные годы интернета мало кого заботил этот аспект в продвижении, и алгоритмы поисковиков уделяли этому сильно меньше внимания. За годы работы в текущей компании у меня сформировался четкий перечень 📋 того, что входит в техническую СЕОшку, и возможно когда-нить я об этом также напишу например где-то на работе в постах, но вряд ли это будет в моем блоге, так как это сложные технические для понимания моменты, которые я не публикую в своем блоге.</p>
        <p><i>Вордстат - сервис от компании Яндекс, позволяет понять и проанализировать, какие запросы чаще всего ищут пользователи поисковой системы Яндекс.<br>
        Семантическое ядро сайта (семантика) — это список ключевых слов и словосочетаний, приводящих на сайт целевых посетителей, используется для продвижения сайта в поисковых система.</i></p>


        <h2 id="a-3">Триггеры для написания статьи</h2>
        <p>В данной статье речь пойдет в первую очередь о теоретической СЕО-оптимизации и о ее несовершенстве на текущий день. Хотя так как она плотно связана с технической, некую часть работ по технической я бы назвал также бесполезной, будь у нас идеальные поисковые системы.</p>
        <p>Идеей для написания этой статьи послужило некое мнимое мнение, которое я постоянно слышу (даже на работе), что поисковые системы при помощи нейронок сейчас развились до такой степени, что их невозможно обмануть 🤖, что они очень умны. С каждым годом применяются все больше факторы ранжирования, однако действительно ли они улучшают общую картину СЕО-оптимизации? На мой взгляд нет! Попробуем разобраться.</p>
        <p><i>Ранжирование (в результатах поисковой выдачи) - это расстановка приоритетов в поисковой выдаче запроса для разных сайтов и ссылок. Иными словами при ранжировании поисковая система решает, почему один сайт по одному и тому же запросу должен быть на первой строке первой же страницы, а второй где-то на середине второй страницы.</i></p>
        <p>Так или иначе по работе я регулярно сталкиваюсь с СЕО, иногда даже читаю что-то для себя. В этом году я прочитал книгу 📗 “Светлая сторона продвижения сайтов” от авторов Рамазана Миндубаева, Дмитрия Булатова, Альберта Сафина. Также посмотрел и ряд видео материалов, сопровождающих данную книгу. Авторы называют это светлой стороной продвижения сайтов. Но для меня это скорее черная сторона СЕО и куча бессмысленной и глупой работы. Конечно это не настолько черная сторона СЕО, когда, например, люди для обмана поисковиков перечисляли все ключевые фразы в полностью скрытом блоке на страницах сайта. Но я все равно не вижу в современном СЕО светлой стороны, а вижу несовершенство поисковых систем. Я ни в коем случае не критикую современных СЕО-шников за их методы. Они всего лишь играют по имеющимся правилам и используют все возможные и допустимые способы оптимизации.</p>

        <h2 id="a-4">Так что же не так с поисковиками?</h2>
        <p>Постараюсь все свои недовольства разбить на несколько пунктов и детально рассмотреть каждый.</p>
        <p><b>1. Алгоритмы и факторы ранжирования. 🔝</b></p>
        <p>Существует множество факторов и критериев по которым поисковая система оценивает “качество” материала. У каждой системы количество таких критериев может варьироваться. Так, у яндекса например более 200 факторов. Многие факторы поисковых систем можно объединять в группы по схожим критериям (например, поведенческие факторы: то, как ведет себя пользователь на странице, или, например, факторы доменного имени: насколько старое доменное имя, нет ли его в спам базах, насколько в целом соответствуют и подходят тематики сайта) и другие группы факторов.</p>
        <p>Каждый год факторы ранжирования улучшаются, но это происходит так медленно, что такими мелкими улучшениями мы придем к действительно качественной поисковой системе лет через 50. Каждый последующий алгоритм ранжирования больше похож на подкручивание существующих факторов. Повысить фактор А на 1%. Понизить фактора Б на 4%. Руками происходит это изменение или нейронами мы не знаем, но важно то, что этого явно недостаточно для концептуально хорошего поиска.</p>
        <p>Среди факторов ранжирования есть много странных: время пребывания на сайте не всегда показывает качество материала; год домена: не всегда старый домен означает более качественней, чем недавно зарегистрированный и др.</p>

        <img class="post-img" src="/images/blog/seo/seo2.jpeg" alt="Современные поисковые системы">

        <p><b>2. Вечные эксперименты. ⚖</b></p>
        <p>Мы всегда проводим эксперименты и тесты: засекаем, насколько это позволит по каким-то  запросам обойти конкурентов или просто получить больше трафика (посетителей) на сайте. Мы досконально не знаем, что попадет в сниппеты поисковой выдачи, лишь ориентируясь на условные рекомендации. Я ничего не имею против тестирования, направленного на анализ поведения и восприятия людей ибо все люди разные, и перекрашивание зеленой кнопки в синюю действительно может повысить или понизить количество кликов на определенный процент. Но если люди все разные, то поисковая система (например гугла) одна едина. Почему перемена некоторых блоков местами или разбавление блока какой-то текстовой информацией по мнению поисковой системы делает страницу лучше/хуже? Мы не должны наугад подбирать лучшее решение по мнению поисковой системы. Мы должны однозначно его знать.</p>
        <p><i>Сниппеты (в поисковой выдаче) - дополнительный материал страницы, отображаемый в выдаче рядом с ссылкой на сайт и тестовым описанием этой страницы. Сниппетом могут служить адреса, телефоны, аккордеоны, мини-таблицы и многая другая информация.</i></p>

        <p><b>3. Генерация лишнего контента. 🗃</b></p>
        <blockquote class="blockquote">
            <p>Человечество сегодня за сутки производит в 8500 раз больше контента, чем хранится в Библиотеке Конгресса США; ежесекундно публикуется в 1000 раз, а ежесуточно — в 80 млн раз больше интернет-контента, чем в 130 млн печатных книг, изданных за всю историю человечества.</p>
            <cite>Бретт Кинг</cite>
        </blockquote>
        <p>Одна из основных на мой взгляд проблем СЕО-шки: генерация лишнего контента и сам процесс построения семантического ядра. Сначала анализируем поисковые запросы. Далее подгоняем (составляем) заголовки и другие ключевые фразы страницы под интенты в порядке важности (по убыванию, где самые важные ставятся в начало).</p>
        <p><i>Интенты — это желания и намерения пользователя; то, что он держит у себя в голове, когда вводит поисковый запрос.</i></p>
        <p>Когда говорят, что поисковая система это целый сложный комплекс факторов, с которыми работают нейронные сети и прочие алгоритмы обучения/самообучения, мне это видится всегда по-другому. Поисковая система в моем понимании сейчас это ребенок, который ведется на запросы. Кто лучше оптимизирует: легально или обманным путем (найдет лазейку)  - тот и будет в приоритете. Ты никогда не знаешь наверняка, что нравится этому ребенку, а что нет, и всегда проводишь различные А/В тесты. Это как доверчивая бабуля, которая имеет свое мнение, но оно редко когда является истинно верным, пока не придет человек (асессор), которому поисковая система верит на слово.</p>
        <p>Приведем вполне реальный пример. У нас есть на сайте 15 - 20 тысяч страниц, которые схожи на 95-99 процентов по своему наполнению. Меняются только заголовки, и кое-где действительно мизерная часть информации.<br>
            Такими страницами могут являются например следующие:<br>
            Кредит пенсионерам 100 000 рублей в Смоленске<br>
            Кредит пенсионерам  100 000 рублей в Омске<br>
            Кредит пенсионерам  100 000 рублей в Тюмени</p>
        <p>Таких городов могут быть тысячи. Необходимая сумма может варьироваться скажем от 10 000 тысяч до 1 миллиона, а на примере пенсионера заемщиком может быть кто угодно: студент, военный, домохозяйка, инвалид, эмигрант и многие многие другие социальные группы. Любое существительное, кем может являться человек, подойдет под запрос. И как мы поступаем в подобных ситуациях? Только задумайтесь на минуту, что мы делаем для достижения целей, чтобы “скормить” эту информацию поисковой системе? Правильно, мы генерируем все возможные комбинации вариантов! И это все только ради того, чтобы наши заголовки были максимально близки к частотности запроса. А чтобы покрыть больше запросов, мы создаём сотни, а то и тысячи страниц с различными вариантами этих комбинаций.</p>
        <p>Почему для этого нельзя сделать одну единственную страницу?<br>
            Кредиты пенсионерам  100 000 рублей в городах [Смоленск, Омск, Тюмень]. Однако в современных реалиях такой запрос (если это не сверх авторитетный сайт) не будет высоко ранжироваться. Более того даже этот вариант не является идеальным для поисковой системы будущего. Проблема этого запроса еще в том, что здесь явно прописана сумма 100 000 рублей и категория заемщика: пенсионер. Это же совсем не значит, что в этих городах нельзя получить кредит на другую сумму и другим социальным группам людей. Идеальная поисковая система должна понимать, что есть одна единственная страница, на которой можно получить информацию о кредитах от суммы N до суммы M в городах (список городов) для группы (список социальных групп).
        </p>
        <p>Кредиты {10 000, 15 000, 20 000, …. , 1 000 000} {пенсионер, студент, домохозяйка, …, инвалид} в {Смоленск, Омск, .., Тюмень }</p>
        <p>API взаимодействия (перечисления) для поисковой системы, которые бы предоставляли оптимизаторы сайтов, может и скорее будут совершенно другими и более обширными. Но я уверен, что в данном взаимодействии разобрались бы как современные СЕОшники, так и обычные администраторы блогов, интернет-магазинов и других сайтов.</p>
        <p><i>API - это совокупность инструментов и функций в виде интерфейса для создания новых приложений, благодаря которому одна программа будет взаимодействовать с другой.</i></p>
        <p>В идеальной поисковой системе будущего этот запрос не должен быть ниже, чем конкретный высокочастотный запрос. Поисковая система должна обращать внимание на качество информации, ее достоверность, скорость и удобство подачи. Всё! Никаких 20 тысяч страниц. Если владельцу ресурса для взаимодействия с поисковой системой необходимо предоставить какие-то параметры, по которым будет работать будущий поиск, это не составит труда: передать доступные страницы, доступные города, доступные социальные группы. Тысячам сайтам, преимущественно интернет-магазинам, особенно мелким и средним, которые борются с большими компаниями по высокочастотным запросам, не пришлось бы у себя плодить тысячи страниц. Одна единственная страница с каждого сайта в базах поисковых систем. Представьте как мы можем разом сэкономить сотни или даже тысячи жёстких дисков, сотни серверов, если не будем просто плодить дубли информации, делать лишнюю работу и концентрироваться на качестве, а не на шаблонности и заточке под поисковики.</p>
        <p><i>Высокочастотный запрос - это запросы, которые обладают высокой частотой спроса в интернете. Попадание сайта по ВЧ запросу в топ выдачи сильно отражается на росте посещаемости и его видимости.</i></p>

        <p><b>4 Игнорирование требований и установок. 🔗</b></p>
        <p>Поисковая система - это черная коробка полная магии (еще и не понятно хорошей или плохой), которая скрыта от глаз СЕО-специалистов. Никто наверняка не знает, что по итогу получится после оптимизации страниц среди тысячи других страниц конкурентов. Но даже среди этой магии есть несколько четких правил, по которым поисковики разрешают играть всем. Среди которых можно отнести, например, заголовок и описание страницы, которая будет отображаться в поисковой выдаче. То, что человек заполнил в специальных полях, то и должно быть при выдаче страницы! Действительно ли это так должно работать? Да! Так ли на самом деле? Не совсем! Даже зная, куда и как писать информацию для описания, которое должен видеть пользователь, поисковая система в редких случаях игнорирует описание, указанное в требуемом поле, и берет совершенно другое, которое на взгляд алгоритма подходит лучше.</p>

        <p><b>5 Роль ассесоров. 🦸‍♂️</b></p>
        <p>Может открою для кого-то Америку, но поисковые системы не работают полностью независимо. Большую роль, а где-то даже решающую, играют ассесоры. Они могут как понизить, так и повысить по своему усмотрению ранжирование источника в поисковой системе. И пусть в целом они обрабатывают очень малый объем информации. Они есть! И мы на работе также уделяем большое внимание ассесорам. Мы выставляем важную (по нашему усмотрению информацию) на самые видные места, чтобы это бросалось сразу в глаза ассесорам, которые хотя мельком, но приходят на сайт. Если поисковые системы были бы совершенны и идеальны, никакие бы люди извне не нужны были.</p>
        <p><i>Ассесоры - люди, представители поисковых систем, проверяющее качество и достоверность информации.</i></p>

        <p><b>5 Техническая сложность в программировании. ⛓</b></p>
        <p>Возможно самый сложный для чтения пункт, с множеством непонятных терминов. Но я также не мог его не указать. Как результат пунктов выше и некоторых неуказанных выше проблем возникает также сложность в создании и обслуживании такого ресурса.<br>
            Если использование ЧПУ (человеко-понятных URL (страниц)) еще можно как-то оправдать, ведь читаемая ссылка и адрес всегда приятнее воспринимается. То в целом  “правильная” вложенность урлов сайта, усиление подразделов сайта, использование поддоментов сугубо в СЕО-целях - всё это полнейшая утопия и значительное усложнение в программировании. Спроектировать СЕО-веб-приложение, хорошо заточенное под СЕО-оптимизацию и полностью удовлетворяющее просьбы и хотелки СЕОшников, это очень сложное дело. А если речь заходит о том, что нужно полностью или в значительной степени переработать вложенность страниц и разделов по ходу работы сайта, процесс по сложности можно умножать в несколько раз. Иногда в подобных переработках просто не обойтись без временных или постоянных костылей. Когда меня друзья программисты спрашивают, почему мы не используем frontend-фреймворки у себя в СЕО-проектах, то одна из основных проблем, которую я озвучиваю: маршрутизация ни одного известного на сегодня frontend-фреймворка в полной мере не может покрыть хотелки СЕОшников. Часто даже маршрутизации backend-фреймворков (которые по умолчанию предназначены в том числе для гибкой работы с урлами) не хватает для удовлетворения потребностей СЕО-оптимизации, так что же говорить про всякие Реакты и Ангуляры? Пожалуй закончим со сложными терминами и в целом с немалым разделом и перейдем далее.</p>

        <h2 id="a-5">Какими я вижу поисковые системы</h2>
        <p>Какие признаки я жду от поисковых систем нового поколения:</p>
        <ul>
            <li>Отсутствие ассесеров</li>
            <li>Более современные, а главное продвинутые факторы ранжирования</li>
            <li>Универсальность запроса без необходимости дублировать и копировать бессмысленные сотни/тысячи страниц (это пожалуй самый главный фактор)</li>
            <li>Больше человечности, а не бездумный перебор и анализ больших данных</li>
            <li>А/В тесты могут влиять на поведение человека на сайте (яркие кнопки с призывом купить товар могут повысить конверсию покупок на несколько процентов, или наоборот отпугнуть из-за навязчивости). Но А/В тестирование не должны применяться для отслеживания поведения сайта в поисковой выдаче.</li>
            <li>Прозрачность (тогда и отпадет необходимость в А/В-тестах)</li>
            <li>Единые правила игры</li>
        </ul>

        <img class="post-img" src="/images/blog/seo/seo3.jpeg" alt="Поисковые системы будущего">

        <p>Каждый раз находятся сайты и оптимизаторы, которые попадают в ТОПы (на высокие и выгодные позиции выдачи) за счет темных методов оптимизации (это называется темное СЕО, за который можно было получить бан и которое слава Богу с каждым годом становится меньше). Однако хочется верить, что термин темная сторона провидения так и останется где-то в конце нулевых. А светлая оптимизация, которой СЕО-шники называют современную методику, претерпит значительные изменения.</p>

        <h2 id="a-6">Когда ждать улучшения</h2>
        <p>Когда ждать действительно качественных поисковых систем? Ближайшие лет 5-10, я не думаю, что конкретно что-то сильно поменяется. Есть надежда на квантовые компьютеры и квантовые вычисления, однако они не решат комплексно все проблемы. Они могут лишь решить некоторые проблемы, связанные, например, с нехваткой вычислительных мощностей. Можно за их счет более быстро обрабатывать информацию. Но этого будет скорее всего недостаточно, чтобы построить поисковую систему, полностью удовлетворяющую нас. К тому же я не вижу предпосылок, чтобы модификации имеющихся алгоритмов и факторов ранжирования в обозримом будущем способны были существенно повлиять на качество и вывести поисковые системы на совершенно новый уровень. Возможно нужно концептуально что-то новое, и квантовые вычисления и компьютеры способны дать этому толчок.</p>

        <h2 id="a-7">СЕО по единым и светлым правилам</h2>

        <p>Какое будет СЕО, если правила игры будут действительно прозрачными и едиными для всех: допустим мы четко знаем, какие должны быть заголовки (а вернее это и не должно быть уже важным) и какие данные точно пойдут в микроразметку. Когда все сайты с точки зрения привлекательности станут “одинаковыми”, на что тогда делать упор поисковой системе? Я думаю можно и далее работать и делать упор на технические показатели: скорость загрузки 🏃‍♂️, перфоманс страницы (эти показатели есть и учитываются и сейчас) 🖥, однако они не соответствуют действительности. Много плохих сайтов до сих пор попадают в ТОПы выдачи, в то время как быстрые и удобные сайты часто оказываются где-то ниже.
            Это и связано с тем, что в первую очередь учитывается теоретическая СЕОшка. В поисковиках нового поколения должна напрочь исчезнуть теоретическая оптимизация. Или по крайней мере превратиться во что-то другое. Так как поисковые системы будут обладать “настоящим” (гораздо превосходящим по качеству) искусственным интеллектом 🤖, особенно если исключить наличие ассесеров, поисковики должны самостоятельно на более новом уровне определять качество и достоверность предоставленной информации. Это и должно стать основным показателем ранжирования (даже в большей степени, чем техническая оптимизация) и полностью заменить теоретическое СЕО. На данный момент я не вижу предпосылок того, чтобы поисковые нейронные сети умели должным образом анализировать информацию. С чем это связано: слишком большой объем информации в интернете, которая только продолжает расти в геометрической прогрессии или плохое качество нейтронных сетей, в целом сложно сказать. Я думаю скорее второй вариант. Но одно я знаю точно, порождая по 20 тысяч однотипных страниц, мы явно идем не тем путем и только усложняем работу поисковым системам и “загрязняем” кучи серверов лишней информацией. Однако, не имея хороших альтернатив, все еще занимаемся подобным продвижением. В поисковиках будущего мы не будем смотреть интенты для формирования заголовков, чтобы подогнать фразы как можно больше под запросы. Мы будем сразу говорить поисковые системы, кто мы и какие услуги предоставляем. А насколько качественно мы это делаем и должна определить поисковая система. Сбор семантического ядра станет другим. С появлением квантовых компьютеров со стабильными кубиками вычислительная мощность в целом возрастет. Это позволит более часто и более качественно индексировать страницы. Но возрастет ли качество самой индексации поисковых систем - вопрос остаётся открытым.</p>

        <h2 id="a-8">Выводы</h2>
        <p>Попробую подытожить написанное выше и перечислить кратко проблемы, которые я вижу у современных поисковых систем.</p>
        <ol>
            <li>🔝 Несовершенные факторы и алгоритмы ранжирования и учета качества сайтов.</li>
            <li>⚖ Вечно приходится проводить А/В тесты и различные эксперименты, чтобы понимать как это повлияет на поисковую выдачу.</li>
            <li>🗃 Генерация кучи лишних страниц и однотипного контента, и все ради того, чтобы удовлетворить поисковую систему. Это напоминает подгон под ответ задачи нежели качественное ее решение.</li>
            <li>🦸‍♂️ Вмешательство человека (ассесора) в систему не означает что-то плохое, однако это должны быть единичные случаи, а не регулярные. Поисковые боты должны сами хорошо с этим справляться.</li>
        </ol>

        <h2 id="a-9">И еще немного о поисковых системах</h2>
        <p>Немного уходя от основной темы (рассуждения о качестве теоретического СЕО на сегодня), напоследок еще немного поговорим о поисковых системах в целом 💡.</p>
        <p>Мало кто знает, однако помимо поисковых систем Яндекс и Гугл существует множество других, в том числе весьма хороших. Если такие поисковые системы как Рамблер, Бинг, Яху, Мейл по самым разным причинам не вызывают доверия (у кого-то малая поисковая база, кто-то уже давно не на пике и туда никогда не вернется), то есть несколько поисковых систем, которые у меня вызывают пристальный интерес. Если говорить о DuckDuckGo 🦆, то это весь хороший поисковик с большой базой и неплохой приватностью (по крайней мере на момент написания статьи). Помимо DuckDuckGo у меня в закладках есть поисковик Brave от одноименного браузера, который в ближайшее время я хочу опробовать. И еще один интересный поисковик You, который у меня вызывает еще большей интерес, чем Brave и DuckDuckGo. В частности по запросам программирования выдача этого поисковика мне нравится даже больше чем Яндекса или Гугла.</p>
        <p>Иногда у меня в голове возникает еще минимум 2 вопроса, связанных с поисковыми системами. Свои рассуждения и попробую далее изложить.</p>
        <ol>
            <li>Изменится ли доля яндекса и гугла в доминировании в интернете? (Так как данный пост рассчитан на русскоязычных читателей, а для них именно эти поисковые системы являются основными, то для примера взял именно эти). Если краткий ответ, то скорее нет. Если Яндекс в условиях санкций (которые в целом наложены на регион) плавно может сдать в качестве или по крайней мере отстать в фишек гугла, то вот самому гуглу в мире в целом мало что мешает и дальше развиваться. Поэтому я думаю что Гугл и дальше будет доминировать. Это касается ближайших лет 20. Но давайте не будем забывать, что в мире IT уже было немало случаев, когда политика компании приходила к кризису и упущению явного доминирования на рынке: Xerox, Intel и конечно же поисковая система Yahoo, которая в начале нулевых доминировала в своей сфере. Скорее всего Гугл умеет учиться на чужих ошибках и не допустит подобного с собой. Тем более поисковая система для гугла это действительная важная коммерческая составляющая 💵. Но не будем загадывать, что будет лет через 50. Может о поисковой системе Google никто и не вспомнит, как сейчас не вспоминают и Yahoo 😟.</li>
            <li>Могут ли появится узкоспециализированные поисковые системы 🔍 которые по качеству будут превосходить более универсальные? Этот вопрос пожалуй даже более сложный. В какой-то степени такие системы уже есть и работают (ищут) в рамках своей системы, но они вряд ли выйдут за пределы этого и будут конкурировать с более универсальными. С другой стороны если бы такая поисковая система действительно представляла что-то очень прогрессивное в плане поиска, я бы стал ею пользоваться, и не важно, поиск это программного кода или строительных материалов, главное, чтобы поиск в этой нише был максимально естественным и человечным. Такой поиск предполагал бы отсутствие привычных для нас алгоритмов и был основан целиком и полностью на машинном обучении и более продвинутых технологиях. С другой стороны появись такой поиск, умеющий совершенно качественно работать в какой-то одной определённой нише, что бы мешало применить его и обучить на другие ниши? Тогда мы бы снова скатились к универсальному поиску. Только на этот раз более совершенному.</li>
        </ol>

    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>

