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
        <time datetime="2022-11-18" class="date-pub">18 ноября 2022</time>

        <p>На днях стартует чемпионат мира по футболу. Это самое ценное и важное соревнование в карьере каждого футболиста.
            Ценность добавляет то, что в отличие от многих других видов спорта чемпионат мира по футболу проходит 1 раз в 4 года, в отличие например от хоккея.
            Поэтому у футболиста за карьеру примерно есть 2 попытки чтобы выиграть его и показать, на что способен он и его сборная. Тренеры под ЧМ и ЧЕ выращивают целые поколения и наигрывают их, и это даёт результат : тотальное (или почти тотальное) доминирование одной или нескольких команд.
            Начиная с нулевых например можно выделить сборные Италии, Испании, Германии, которые наигрывали костяк на протяжении многих лет и это давало свои результаты.
            Обычно ЧМ проходит летом, в этом году соревнование будет в конце осени, потому что пройдёт в жаркой стране Катар и зимой более подходящий климат.
            Последний ЧМ выиграла сборная Франции. Да-да, тот самый что был в России и в финале они обыграли хорватов, которые обладая звездным составом заняли 2место, бронзу взяли бельгийцы с ещё более звёздным составом, в матче за 3е место обыграв Англию.</p>

        <p>Напомню, что ни у Криштиану Роналду ни у Лионеля Месси нет кубка чемпионов мира, и уверен, они бы обменяли все свои статуэтки золотых мячей на эту награду.
        Самым легендарным футболистам считается бразилец Пеле, который аж 3 раза становился с бразильцами чемпионом мира. Также чемпионами мира много раз становились Итальянцы, Уругвайцы и Немцы. А вот Англичане, чья сборная была всегда сильна, выигрывали ЧМ всего один раз.
        Кроме того, из интересного факта можно выделить то, что Италия, выиграв последний чемпионат Европы 2 года назад, умудрилась не попасть на чемпионат мира.
        И хоть в последний момент могли иp ЧМ исключить сборную Туниса и на ее мечта поставить Италию (как сборную с самым высоком рейтингом из тех, кто не попал), этого не случилось, и Тунис сам будет учавствовать. Франции в этом году будет крайне тяжело отстоять звание чемпиона, так как на этот мундиаль трехцветные поедут без множества футболистов из-за травм в линии защиты и полузащиты.
        Посмотрим фаворитов данного соревнования в этом году:</p>

        <ul>
            <li>🇧🇷 1. Бразилия</li>
            <li>🇦🇷 2. Аргентина</li>
            <li>🇩🇪 3. Германия</li>
            <li>🇪🇸 4. Испания</li>
            <li>🇫🇷 5. Франция</li>
            <li>🏴󠁧󠁢󠁥󠁮󠁧󠁿 6. Англия</li>
            <li>🇳🇱 7. Нидерланды</li>
            <li>🇩🇰 8. Дания</li>
            <li>🇧🇪 9. Бельгия</li>
            <li>🇭🇷 10. Хорватия</li>
        </ul>

        <p>В конце вспомним лучших бомбардиров данного соревнования и ими являются немец Мирослав Клозе и бразилец Роналдо (не путать с португальцем Криштиану).</p>
        <p>А за кого будете болеть вы, если будет болеть и смотреть матчи вообще?</p>
        <p><i>(Полностью все факты писал по памяти, так что в теории могли быть мелкие погрешности, но надеюсь все так написал)</i></p>
    </div>
</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
