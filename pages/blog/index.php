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
                <a href="/blog/run"><img class="post-item-img" src="/images/blog/run/preview.jpeg" alt=""></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/run">Новый личный беговой рекорд</a></h2>
                    <time class="date-on-index">28 апреля 2021</time>
                    <p class="post-item-desc">Сегодня я установил личный рекорд по бегу. 16 километров 200 метров без единой остановки. Вся эта дистанция далась мне ровно за....</p>
                    <a href="/blog/run" class="post-item-btn">Читать далее...</a>
                </div>
            </div>
        </div>

        <div class="posts">
            <div class="post-item">
                <a href="/blog/movies-imdb"><img class="post-item-img" src="/images/blog/post6.jpg" alt=""></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/movies-imdb">Мысли после просмотра 250 лучших фильмов всех времен</a></h2>
                    <time class="date-on-index">22 марта 2021</time>
                    <p class="post-item-desc">Меня всегда слегка пугали люди, которые в stories или других источниках просят друзей и знакомых посоветовать фильм ибо сами не могут его выбрать....</p>
                    <a href="/blog/movies-imdb" class="post-item-btn">Читать далее...</a>
                </div>
            </div>
        </div>

        <div class="posts">
            <div class="post-item">
                <a href="/blog/podcasts"><img class="post-item-img" src="/images/blog/post5.png" alt=""></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/podcasts">Обучение через подкасты</a></h2>
                    <time class="date-on-index">22 марта 2021</time>
                    <p class="post-item-desc">В своих предыдущих статьях я не раз ссылался при самообучении на такие способы как: чтение книг, просмотр Ютуба, разбор ссылок, подкасты. В этой статье речь пойдет как раз о подкастах...</p>
                    <a href="/blog/podcasts" class="post-item-btn">Читать далее...</a>
                </div>
            </div>
        </div>

        <div class="posts">
            <div class="post-item">
                <a href="/blog/books-2020"><img class="post-item-img" src="/images/blog/post4.jpg" alt=""></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/books-2020">Треть сотни книг за 11 месяцев</a></h2>
                    <time class="date-on-index">5 декабря 2020</time>
                    <p class="post-item-desc">Объявляя личным год 2020 годом “чтения книг” я не ставил перед собой определенные цели по количеству книг. Я хотел еще дальше прокачать свои скиллы по программированию, ведь среди множества направлений...</p>
                    <a href="/blog/books-2020" class="post-item-btn">Читать далее...</a>
                </div>
            </div>
        </div>

        <div class="posts">
            <div class="post-item">
                <a href="/blog/planning"><img class="post-item-img" src="/images/blog/post3.jpg" alt=""></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/planning">Планирование как степень достижения целей</a></h2>
                    <time class="date-on-index">3 августа 2020</time>
                    <p class="post-item-desc">Ложась в постель перед сном как часто Вы задаете себе вопросы: "На сколько сегодняшний день отличается от остальных?” И "что полезного я сделал сегодня для достижения целей?”...</p>
                    <a href="/blog/planning" class="post-item-btn">Читать далее...</a>
                </div>
            </div>
        </div>

        <div class="posts">
            <div class="post-item">
                <a href="/blog/koronavirus"><img class="post-item-img" src="/images/blog/post2.jpg" alt=""></a>
                <div class="post-text-wrap">
                    <h2 class="post-item-title"><a href="/blog/koronavirus">Мои мысли о коронавирусе</a></h2>
                    <time class="date-on-index">12 марта 2020</time>
                    <p class="post-item-desc">Еще пару недель назад ситуация с коронавирусом была действительно непонятной. Многое зависело от того как развитые страны Европы, США и другие будут готовые встретить коронавирус ибо на примере одного Китая понять это было невозможно...</p>
                    <a href="/blog/koronavirus" class="post-item-btn">Читать далее...</a>
                </div>
            </div>
        </div>

        <div class="posts">
            <div class="post-item">
                <a href="/blog/students"><img class="post-item-img" src="/images/blog/post1.jpg" alt=""></a>
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
