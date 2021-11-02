<?php
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
        <time datetime="2021-08-17" class="date-pub">17 августа 2021</time>
        <p>Статья, которая будет ниже не совсем стандартная и похожа на предыдущие. Без содержания, более запутанная, но с так же выводами и надеюсь не менее интересная чем предыдущие. И так погнали…</p>
        <p>В каком возрасте вы впервые столкнулись с черными полосами в своей жизни?</p>
        <p>До недавнего времени я не верил в их существование, наверно потому даже живя один и решая самостоятельно свои проблемы они не приходили ко мне все одновременно.</p>
        <p>Сложно сказать к какой из 5 уровней социальной среды я отношусь (5 уровней из книги 📚 “Лидер и племя”), но однозначно мне присущи многие черты последнего 📈 5го уровня. Я крайне доволен своей жизнью, родными, друзьями мне нравится моя работа. Я сижу в зоне комфорта, развиваюсь, делаю свою работу и надеюсь мир вокруг меня становится чуточку лучше. Ни с кем не конкурирую и не соревнуюсь будь то в жизни или на работе 🧘🏾‍♂️.</p>
        <p>Но не так давно после весьма удачной поездки ✈️ в Новосибирск и Алтай у меня выдались два не очень удачных месяца. Находясь не в Минске по возвращению в город мне уже надо было разрешить 3-4 мелкие проблемы, при решении которых мне необходимо было выходить из зоны комфорта и повседневной жизни. Приехав в Минск у меня сломалась машина 🚘. Прям на против дома уже на стоянке. И это все бы ничего, но я только что прошел тех осмотр и был готов на ней покорять хоть Эверест. Поломка была такого характера, что я не мог завести машину, что бы поехать хотя бы на ближайшую СТО. Все выездные специалисты мне отказывали ибо точно не знали что именно из 3-4 вариантов может быть ибо без ямы или эстокады проверить тяжело. Но даже эта проблема оказалась слишком мелкой по сравнению с тем что случилось со мной через несколько дней. Мой банк 🏦 заблокировал все мои деньги и счета. Не работало ни мобильное приложение ни веб версия личного кабинета. Конечно же снять денег я не мог, ровно как и расплатиться за покупки. Во-первых у меня на тот момент было не так много налички, во-вторых на тот момент банк заморозил около 8 500$. Сумма может и не самая большая, но все же это мои честно заработанные деньги терять которые не хотелось. В добавок к этому позже через пару дней я узнал, что здоровье нескольких моих родственников 👨🏻‍🦳👨🏻 (слава Богу не ближайших) резко ухудшилось. Если вы думаете, что на этом все мои беды и несчастья закончились, то вы ошибаетесь. Помимо 3-4 мелким проблем, сломанному под окном авто, родственников и того что я сижу почти без денег неожиданного добавляется еще одна. Мои довольно тихие соседи сверху затопили меня 💧. И все бы ничего, но затопление произошло в районе выключателей и розетки. Розетка и выключатели начали издавать громкий и странный гул и шум и казалось, что вот-вот все заискрит 💥. Что бы этого избежать я оперативно отрубил все рубильники (конечно же только свои , а не соседские).</p>

        <div><img style="max-height: 450px; max-width: 300px; margin: auto" class="post-img" src="/images/blog/black-lines/black-line-1.jpg" alt="Черная полоса" loading="lazy"></div>
        <div><img style="max-height: 450px; max-width: 300px; margin: auto" class="post-img" src="/images/blog/black-lines/black-line-2.jpg" alt="Черная полоса" loading="lazy"></div>
        <p>Это было очень странное чувство: без машины, без денег, без электричества и в придачу с нерешенной ни одной проблемой, которой изначально планировал решить 🤷🏻‍♂️😨. Но даже в этот момент хоть истерический смех 🤣 долго не мог от меня уйти, я все же понимал, что могло быть и хуже. Квартира не сгорела, да и никто не умер. </p>
        <p>Во всем нужно искать свои плюсы. Электричество время от времени я пытался вернуть, но звуки розетки не проходили и мне пришлось тщательно разобраться какой рубильник отвечает за какие комнаты/выключатели. Это мне не помогло ведь полностью за всю квартиру отвечал один общий рубильник, соответственно я не мог оставить включенными часть квартиры 🔌 💡, а залитые розетки отключить. Что бы быстрее происходил процесс просыхая мне пришлось полностью разобрать и розетку и выключатели. Таким образом благодаря этой проблеме я изучил систему подачи электропитания в квартире и научился разбирать - собирать выключатели и розетки. Без электричества я долго не пробыл и вскоре после часов 5-6 можно было включить свет и больше не слышать эти ужасные звуки.</p>
        <p>Следующая проблема которую я побежал решать была разблокировка счетов в банке 💰. С начала рабочей недели на протяжении 2-3 дней я около 5 раз ходил в банк и доносил требуемые им документы 📑. Я подходил уже без очереди к девочке, которая меня обслуживала, она забирала документы, я возвращался домой и ждал звонка 📞. Что бы понять и вычислить какой именно отдел меня заблокировал у этой же девочки ушло тоже не мало времени и она уже успела обзвонить 2-3 места. Разблокировать она сама ничего не могла даже при наличии у меня всех документов ибо у нее не хватало полномочий. Я же в свою очередь тоже был сильно зависим от своей компании, которая предоставляла мне документы. Общение происходило примерно по такой цепочке: Наш операционный директор -> Я -> Девушка в отделении банка принимающие документы и контактирующая с отделом который меня заблокировал -> Отдела по переводам из-за рубежа, который меня и заблокировал. После того как от последнего элемента цепочки появлялась какая-то информация она в обратном порядке следовала по цепочке. Возможно это напоминало игру сломанный телефон и возможно эта и есть одна из причин почему я раз 5 ходил 🏃🏽 в банк. Однако сотрудничать напрямую с нашей фирмой и операционном директором они не стали (Видимо им запрещают общаться со взрослыми дядями из-за границы). Часть документов которые я доносил была максимально абсурдна. Во-первых из-за того что договоры нужно подписывать обоими сторонами и их нужно было печатать 📇, подписывать , фоктать или сканировать, отправлять второй стороне 📮, то есть мне, мне нужно их печатать, подписывать нести в банк (или опять сканировать/фоткать отправлять по электронной почте в банк). Конечно же качество с каждым шагом заметно ухудшалось. Пересылать оригиналы документов слишком долго. Экспресс почтой они бы шли дня 4. Обычной почтой недели две. Местами из-за плохого качества они просиди по 2 раза переделывать документы, что конечно же меня бесило. Первый раз когда я подписывал почти белые листы с еле-еле заметными скриншотами моих работ и программного кода (а их было листов 20) я поймал себя на мысли каким бредом я в данную минуту занимаюсь. Во-вторых документы, которые я предоставлял содержали программный код и изображения подтверждающие код и в целом работы. Надо понимать на сколько это выглядит нелепо и бессмысленно:</p>
        <ol>
            <li>Я не имею права разглашать согласно договора исходные коды 🤐, которые пишу для компании (даже банку). Но ок, компания пошла на уступки и разрешила</li>
            <li>Никто из проверяющих и близко не разбирается ни в коде 🤔, ни в скриншотах ни в перечисленных работах (туда можно напихать любого кода из интернета)</li>
            <li>Заявка на выполнение работ должна быть составлена перед выполнениям работ и так как у меня помесячная оплата, соответственно каждый месяц скажем в начале, где должны быть описаны планируемые проводимые работы 😧. Даже те, кто придерживается скрама и прочих методологий, где явно планируется спринт на месяц или другой срок понимает что зачастую бывает много спонтанных работ. Бывают работы когда приходит генеральный директор или СЕО и говорит что срочно нужно сделать другую задачу. В связи с этим понимаешь что перечень составленный в заявке (по которой потом нужно давать отчет кодом и картинками в банк) далеко не всегда совпадает с реальность. К тому же уровень доверия между мной и компанией такой, что я и без всяких заявок знаю что и в каком приоритете нужно делать.</li>
        </ol>
        <p>Одним словом максимальный уровень дискомфорта, который даже сотрудниками банка делается просто для галочки, потому что так стало надо. Тем не менее после 4-6 дней без денег мне разблокировали все счета и карты и я с легкостью выдохнул.</p>
        <p>Проблемы с машиной так же пошли частично решаться, во-первых на стоянке я сам разобрал что смог (правда не обнаружим поломки собрал обратно), во-вторых я наконец-то полноценно разобрался как можно завести машину из-под капота, тем самым проверив стартер и исключив его поломку. Сделать это было надо сказать не так уж и легко, подлезать к нему очень тяжело, во-вторых при замыкании стартер искрит и оставляет неплохие рубцы на предмете, котором происходит смыкание. А если еще и забыть снять машину с передачи, но она поедет и задавит тебя. Поэтому первых пару раз заводить таким способом было мягко говоря сцыкотно. Тем не менее, я уже мог самостоятельно на ней доехать до СТО 🛠. Приехав на СТО через сутки я уже ее забрал, правда они ее не сделали сославшись, что на текущей их станции нет электрика (у них 4 СТО) и надо ехать на в другое место. Тем нее менее осмотр стартера они мне провели, зачем-то заменили щетки и я отдал деньги за ремонт, которого возможно и не было и поехал на другое СТО. Можно было заехать на абсолютно другое СТО, но тогда мне надо было точно знать что там у них точно есть электрик, а так я уже был уверен и направлялся почти в другой конец города, что бы оставить там машину. Доехал успешно. Через сутки позвонили и сказали что все готово и можно забирать.</p>
        <p>Более мелкие проблемы о которых я по разным причинам не описываю подробнее так же постепенно решились ✅ в течении недели с момента интенсивного закручивания моховика черной полосы. Здоровьем родственников так же улучшилось.</p>
        <p>Тем не менее радоваться было еще рано. В один из дней я решил подклеить свою обувь 👟 (что в принципе ранее делал неоднократно) И тюбик клея, который был переполнен после неаккуратного открытия не просто разлился, а капнул на мои белые кеды, которые и собирался подклеить. И вместо подклейки кеды уже были не пригодны к ношению ибо клей так и не вывелся. Рукожоп скажите вы. Может и будете правы, но в тот период когда казалось все проблемы решены меня насторожило почему это так неловко произошло, ведь такого ранее не было. В шутку я подумал наверно черная полоса не кончилась окончательно. На удивление был прав. На следующий день мне позвонили из банка и сказала, что если в течении суток не донесу договор снова заблокируют еще раз. И деньги я кстати все не снимал, которые были заблокированы в прошлый раз. Поэтому пришлось оперативно снова досылать нужные документы. Как на зло их сотрудники (во сколько бы ты не скинул доки) звонят часов в 6 вечера. А еще они не могут открыть обычный архив и просят переслать просто документом. Казалось бы ситуация вроде под контролем, но не полностью. Вероятность блокировки окончательно не снята. И только после 2 дополнительных пересылок подписанных документов они от меня отстали.</p>
        <p>Я не Тарантино и уж тем более не Нолан 🎥, что бы играть со временем в свои статьях. Но сейчас вернемся чуточку назад к машине. Когда мне позвонили со второго СТО и сказали что все готов это было как раз после случая с кедами и после повторной проблемы с банком. Так вот теперь пришло время до конца раскрыть и эту “сюжетную линию”. Казалось бы все решено. Есть снова открытая проблема с банком и я днем (а из банка позвонили только вечером) еду забирать машину в надежде, что они ее сделали. Приехал, вмести с менеджером СТО сел что бы ее завести. И о чудо: она снова не заводится 🤷🏻‍♂️. При этом я действительно вижу, что работы были, вижу старые запчасти, новый ключ, новую личинку и даже контактную группу. Но при повороте ключа как и ранее вообще ничего не происходит и машина не издает не единого звука. Сначала попробовал менеджер СТО, зачем даже электрик, который это все менял. Похоже они даже расстроились больше, чем я ибо я был готов уже ко всему и единственное что мне хотелось сказать им в шутку: “Ребята, дело не в вас, а во мне” 😅. Тем не менее уже через пару суток я забрал рабочую машину.</p>
        <p>Надеюсь я раскрыл все свои “сюжетные линии” проблемы до самого финала из решений. Стал ли я верить в черные полосы? Нет однозначного ответа. Скорее нет, чем да. Но так как разные события как хорошие, так и плохие в жизни человека случаются в произвольном порядке, как бы человек не старался контролировать свою жизнь, то по теории вероятности конечно же может сложиться так, что часть плохих событий будут идти одно за другим. Стал ли я менее оптимистом по жизни и скатился ли с 5го уровня сразу на 2ой до мыслей “моя жизнь дерьмо” 📉 или вообще до 1го и мыслей “жизнь дерьмо” конечно нет. На смену череды плохих событий придут хорошие. Важно уметь осознавать и замечать их, ведь что-то хорошее человек воспринимает как обыденность, а плохое сразу бросается в глаза и портит все планы. Однако могу сказать точно, что любая череда из группы плохих событий очень сильно демотивирует и сильно вмешивается в повседневное и еженедельное планирование 🗓. Мешает концентрации на работе и личной жизни. Поэтому из любой черной полосы надо стараться выходить как можно быстрее и не унывать если тебе кажется чтобы и нее вышел, но на самом деле ее следы еще видны некоторое время.</p>
    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
