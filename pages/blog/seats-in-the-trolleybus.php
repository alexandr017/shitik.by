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
        <time class="date-pub">30 октября 2021</time>

        <p>По Минску работают очень много троллейбусов модели АКСМ-321. Не скажу что каждый день, но достаточно часто и ими пользуюсь для перемещения по городу. Замечали ли вы соотношение мест для инвалидов по отношению к обычным в данной модели троллейбуса? Мест для инвалиднов там 8, обычных же 18. То есть всего 26 мест. Теперь посчитаем процентное соотношение. Число 8 от числа 26 это 30.77%, соответственно чисто 18 от 26 это 69.23% процентов, что в сумме дает 100%. Таким образом, мы получим что мест для инвалидов почти треть в троллейбусе.</p>
        <div><img style="max-height: 450px; margin: auto" class="post-img" src="/images/blog/seats-in-the-trolleybus/preview.jpg" alt="Троллейбус" loading="lazy"></div>
        <p>Неужели создали сидений и инвалидных бирок на сидения думаю, что у нас каждый третий инвалид? По-моему как-то многовато. Да и потом вы хоть раз видели, что бы одновременно в транспорте ехали более 2-3 инвалидов? Думаю нет. Конечно слово инвалид весьма размазано и вы скажите что это так же сидения и для пенсионеров и отчасти будете правы, однако про пенсионеров там (на табличке) ничего не сказано.  А вот суеверие людей очень даже сильно работает. Я бы не опубликовал эту заметку из своей головы в блог, если бы раз за разом не наблюдал одну и ту же картину. Час пик (или около того). Все обычные места забиты. Еще стоят в транспорте порядка 11-13 человек равномерно распределенных по всему транспорту, но при этом всегда 2-4 места для инвалидов не заняты. Не знаю почему люди садятся на такие места реже, но это факт. Если искать ответ конкретно в моей голове он звучит примерно так: “Если бы я устал за день на обычное место я бы присел. На инвалидное? Пожалуй постою.” Думаю у многих других людей примерно такая логика, из-за чего у нас часто сидячие места, пусть и помеченные особой наклейкой не всегда заполняются, а если и заполняются, то немного хуже чем обычные без пометок / наклеек.</p>

    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
