<?php
includeCSS(['modules/general', 'modules/fonts', 'modules/header', 'modules/breadcrumb', 'modules/blog-index']);
include DOCUMENT_ROOT . '/view/v3/head.php';
?>
<body>
<?php include DOCUMENT_ROOT . '/view/v3/menu.php'; ?>
<main class="container">
    <ul class="breadcrumb">
        <li><a href="/">Главная</a></li>
        <li class="active">Блог</li>
    </ul>
    <div class="post-wrap">
        <h1>Список постов</h1>
        <p style="margin-bottom: 3rem">Когда я только оканчивал колледж, поступил в универ и шел на первую работу я создал блог, в котором публиковал личные заметки, часто используемые куски кода, ссылки и др. материалы.
            С тех пор я сильно прибавил в своих хард-скилах и решил прикрыть тот проект, который у меня нет времени и желаения сопровождать. В замен старому я решил писать статьи общего характера, в которых не будет ни строчки кода. </p>

        <div class="posts">

            <div class="post-item">
                <a href="/blog/people-without-food"><img class="post-item-img" src="/images/blog/people-without-food/preview.jpeg" alt="Если бы люди не нуждались в еде"></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/people-without-food">Если бы люди не нуждались в еде</a></h2>
                    <time class="date-on-index">30 октября 2021</time>
                    <p class="post-item-desc">Человеческий цивилизация слишкам слаба и зависима от разных факторов: наличие кислород в нужной объеме, подходящие давление и температура, защита от радиации, постоянная нужда в питье и еде....</p>
                    <a href="/blog/people-without-food" class="post-item-btn">Читать далее...</a>
                </div>
            </div>

            <div class="post-item">
                <a href="/blog/seats-in-the-trolleybus"><img class="post-item-img" src="/images/blog/seats-in-the-trolleybus/preview.jpg" alt="Что не так с количеством инвалидных мест в троллейбусе"></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/seats-in-the-trolleybus">Что не так с количеством инвалидных мест в троллейбусе</a></h2>
                    <time class="date-on-index">30 октября 2021</time>
                    <p class="post-item-desc">По Минску работают очень много троллейбусов модели АКСМ-321. Не скажу что каждый день, но достаточно часто и ими пользуюсь для перемещения по городу...</p>
                    <a href="/blog/seats-in-the-trolleybus" class="post-item-btn">Читать далее...</a>
                </div>
            </div>

            <div class="post-item">
                <a href="/blog/new-super-heroes"><img class="post-item-img" src="/images/blog/new-super-heroes/preview.jpg" alt="Наш ответ Marvel и DC"></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/new-super-heroes">Наш ответ Marvel и DC</a></h2>
                    <time class="date-on-index">24 октября 2021</time>
                    <p class="post-item-desc">Согласно древне вавилонским мудростям на глиняных дощечках, которые легли в основу хорошей книги “Самый богатый человек в Вавилоне” одна из них гласит, что любой человек...</p>
                    <a href="/blog/new-super-heroes" class="post-item-btn">Читать далее...</a>
                </div>
            </div>

            <div class="post-item">
                <a href="/blog/home-bay"><img class="post-item-img" src="/images/blog/home-bay/preview.png" alt="Моя первая квартира"></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/home-bay">Моя первая квартира</a></h2>
                    <time class="date-on-index">17 октября 2021</time>
                    <p class="post-item-desc">Согласно древне вавилонским мудростям на глиняных дощечках, которые легли в основу хорошей книги “Самый богатый человек в Вавилоне” одна из них гласит, что любой человек...</p>
                    <a href="/blog/home-bay" class="post-item-btn">Читать далее...</a>
                </div>
            </div>

            <div class="post-item">
                <a href="/blog/site-update"><img class="post-item-img" src="/images/blog/site-update/preview.png" alt="Обновил и доработал свой сайт"></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/site-update">Обновил и доработал свой сайт</a></h2>
                    <time class="date-on-index">12 сентября 2021</time>
                    <p class="post-item-desc">Не так давно я обновил свой сайт. Теперь все его разделы снова в одном месте, однако это технические детали, которые вряд ли кому-то интересны. Так же среди основных изменяй можно выделить слегка измененный дизайн...</p>
                    <a href="/blog/site-update" class="post-item-btn">Читать далее...</a>
                </div>
            </div>

            <div class="post-item">
                <a href="/blog/black-lines"><img class="post-item-img" src="/images/blog/black-lines/preview.jpeg" alt="Моя черная полоса"></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/black-lines">Моя черная полоса</a></h2>
                    <time class="date-on-index">17 августа 2021</time>
                    <p class="post-item-desc">В каком возрасте вы впервые столкнулись с черными полосами в своей жизни? До недавнего времени я не верил в их существование, наверно потому даже живя один и решая самостоятельно свои проблемы они не приходили ко мне...</p>
                    <a href="/blog/black-lines" class="post-item-btn">Читать далее...</a>
                </div>
            </div>

            <div class="post-item">
                <a href="/blog/run"><img class="post-item-img" src="/images/blog/run/preview.jpeg" alt="Новый личный беговой рекорд"></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/run">Новый личный беговой рекорд</a></h2>
                    <time class="date-on-index">28 апреля 2021</time>
                    <p class="post-item-desc">Сегодня я установил личный рекорд по бегу. 16 километров 200 метров без единой остановки. Вся эта дистанция далась мне ровно за....<br>Обновлено 18 км 200 метров.</p>
                    <a href="/blog/run" class="post-item-btn">Читать далее...</a>
                </div>
            </div>

            <div class="post-item">
                <a href="/blog/movies-imdb"><img class="post-item-img" src="/images/blog/post6.jpg" alt="Мысли после просмотра 250 лучших фильмов всех времен"></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/movies-imdb">Мысли после просмотра 250 лучших фильмов всех времен</a></h2>
                    <time class="date-on-index">22 марта 2021</time>
                    <p class="post-item-desc">Меня всегда слегка пугали люди, которые в stories или других источниках просят друзей и знакомых посоветовать фильм ибо сами не могут его выбрать....</p>
                    <a href="/blog/movies-imdb" class="post-item-btn">Читать далее...</a>
                </div>
            </div>

            <div class="post-item">
                <a href="/blog/podcasts"><img class="post-item-img" src="/images/blog/post5.png" alt="Обучение через подкасты"></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/podcasts">Обучение через подкасты</a></h2>
                    <time class="date-on-index">22 марта 2021</time>
                    <p class="post-item-desc">В своих предыдущих статьях я не раз ссылался при самообучении на такие способы как: чтение книг, просмотр Ютуба, разбор ссылок, подкасты. В этой статье речь пойдет как раз о подкастах...</p>
                    <a href="/blog/podcasts" class="post-item-btn">Читать далее...</a>
                </div>
            </div>

            <div class="post-item">
                <a href="/blog/books-2020"><img class="post-item-img" src="/images/blog/post4.jpg" alt="Треть сотни книг за 11 месяцев"></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/books-2020">Треть сотни книг за 11 месяцев</a></h2>
                    <time class="date-on-index">5 декабря 2020</time>
                    <p class="post-item-desc">Объявляя личным год 2020 годом “чтения книг” я не ставил перед собой определенные цели по количеству книг. Я хотел еще дальше прокачать свои скиллы по программированию, ведь среди множества направлений...</p>
                    <a href="/blog/books-2020" class="post-item-btn">Читать далее...</a>
                </div>
            </div>

            <div class="post-item">
                <a href="/blog/planning"><img class="post-item-img" src="/images/blog/post3.jpg" alt="Планирование как степень достижения целей"></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/planning">Планирование как степень достижения целей</a></h2>
                    <time class="date-on-index">3 августа 2020</time>
                    <p class="post-item-desc">Ложась в постель перед сном как часто Вы задаете себе вопросы: "На сколько сегодняшний день отличается от остальных?” И "что полезного я сделал сегодня для достижения целей?”...</p>
                    <a href="/blog/planning" class="post-item-btn">Читать далее...</a>
                </div>
            </div>

            <div class="post-item">
                <a href="/blog/koronavirus"><img class="post-item-img" src="/images/blog/post2.jpg" alt="Мои мысли о коронавирусе"></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/koronavirus">Мои мысли о коронавирусе</a></h2>
                    <time class="date-on-index">12 марта 2020</time>
                    <p class="post-item-desc">Еще пару недель назад ситуация с коронавирусом была действительно непонятной. Многое зависело от того как развитые страны Европы, США и другие будут готовые встретить коронавирус ибо на примере одного Китая понять это было невозможно...</p>
                    <a href="/blog/koronavirus" class="post-item-btn">Читать далее...</a>
                </div>
            </div>

            <div class="post-item">
                <a href="/blog/students"><img class="post-item-img" src="/images/blog/post1.jpg" alt="Напутствие будущим программистам"></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/students">Напутствие будущим программистам</a></h2>
                    <time class="date-on-index">12 июня 2019</time>
                    <p class="post-item-desc">Не так давно я общался с одной хорошей знакомой, которая учится на программиста. В процессе беседы я понял, что у нее такой же (неправильный на мой взгляд) образ жизни как у большинства других студентов. Такой же как был у меня и всех моих друзей. Дабы помочь ей взглянуть на реальность программирования и мотивировать уже сейчас...</p>
                    <a href="/blog/students" class="post-item-btn">Читать далее...</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>