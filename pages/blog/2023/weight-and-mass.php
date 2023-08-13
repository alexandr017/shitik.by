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


        <p>Очень часто можно услышать фразу какой у тебя вес?  Давайте разберемся что с ней не так и почему она максимально странная. В самой по себе фразе-вопросе нет ничего странного, если конечно ее не спрашивает например учитель физики. Но чаще всего ее можно слышать от обычных людей, которые чаще всего под этим понятием понимают совсем другое. Конечно же все имеют в виду массу. Но надо понимать, что масса и вес это разные термины. <b>Масса</b> объекта это скальная величина измеряемая в килограммах. Этот параметр (масса) зависит от количества вещества, содержащегося в объекте. <b>Вес</b> это векторная величина измеряемая в метрах деленных на секунду в квадрате (м/с) или ньютонах деленных на килограмм. <b>Тела могу иметь одинаковую массу, но разный вес.</b></p>

        <p>Эти понятия взаимосвязанные, так как вес тела находится через массу. Масса тела всегда постоянна на любой поверхности нашей Земли, в ее атмосфере и даже на поверхности других планет. А вот вес, который рассчитывается по формуле P = m * g, зависит от переменной g (Ускорение свободного падения), которая меняется не то что от планеты к планете, так даже в пределах нашей Земли. Ускорение свободного падения на поверхности Земли g варьируется от 9,780 м/с² на экваторе, до 9,82 м/с² на полюсах. Как я писал выше g можно выразить не только в метрах, деленных на секунду в квадрате (м/с), но и через ньютоны, деленные на килограмм, и в таких случаях g в земных условиях очень можно округлить к единице. С увеличением высоты тела над поверхностью земли, ускорение свободного падения уменьшается. Это связано с тем, что расстояние между земным ядром и объектом увеличивается, и силы притяжения уменьшаются. Это значит, что в даже в самолете ваш вес незначительно будет меньше, чем на земле, а вот масса останется прежней. Посмотрите как меняется ускорение свободного падения на разной высоте.</p>

        <table>
            <thead>
                <tr>
                    <td>Высота</td>
                    <td>g</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0</td>
                    <td>9,8066</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>9,8036</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>9,7759</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>9,505</td>
                </tr>
                <tr>
                    <td>500</td>
                    <td>8,45</td>
                </tr>
                <tr>
                    <td>5000</td>
                    <td>3,08</td>
                </tr>
                <tr>
                    <td>10 000</td>
                    <td>1,50</td>
                </tr>
                <tr>
                    <td>50 000</td>
                    <td>0,13</td>
                </tr>
                <tr>
                    <td>400 000</td>
                    <td>0,0025</td>
                </tr>
            </tbody>
        </table>


        <p>Если в пределах Земли и земной атмосферы изменения кажутся очень мелкими, то предлагаю взглянуть, сколько бы составлял ваш вес на других объектах солнечной системы:</p>
        <ul>
            <li>Земля – 1 g – 9,80665 м/с²</li>
            <li>Луна – 0.165 g – 1,62 м/с²</li>
            <li>Меркурий – 0.38 g – 3,7 м/с²</li>
            <li>Венера – 0.906 g – 8,87 м/с²</li>
            <li>Марс – 0.378 g – 3,711 м/с²</li>
            <li>Сатурн – 1.065 g – 10,44 м/с²</li>
            <li>Юпитер – 2.442 g – 24,79 м/с²</li>
            <li>Нептун – 1.131 g – 11,15 м/с²</li>
            <li>Уран – 0.903 g – 8,87 м/с²</li>
            <li>Плутон – 0.063 g – 0,617 м/с²</li>
            <li>Ио – 0.183 g – 1,796 м/с²</li>
            <li>Европа – 0.134 g – 1,315 м/с²</li>
            <li>Ганимед – 0.146 g – 1,428 м/с²</li>
            <li>Каллисто – 0.126 g – 1,235 м/с²</li>
            <li>Солнце – 27.85 g – 274,0 м/с²</li>
        </ul>

        <p>Имея эти данные давайте рассчитаем вес человека массой 70 кг.<br>
            На Марсе он будет "весить" 70 ⋅ 0.378 ≈ <b>26.46 кг</b><br>
            На Венере – 70 ⋅ 0.906 ≈ <b>63.42 кг</b><br>
            На Юпитере – 70 ⋅ 2.442 ≈ <b>170.94 кг</b><br>
            На Луне – 70 ⋅ 0.165 ≈ <b>11.55 кг</b></p>

        <p>Надеюсь, это был хоть немного полезный для вас пост, и вы усвоили, что чаще всего люди под словом вес хотят узнать не то, с какой силой человек давит на поверхность в данной точке, а то, какая у него масса. В противном случае не удивляйтесь, что вы можете получить ответ не в килограммах, а в ньютонах, да и далеко не те цифры, которые вы ожидаете.</p>


    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>