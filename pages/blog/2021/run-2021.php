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
    <article class="content">
        <h1><?php echo getSeoField('h1') ?></h1>
        <time datetime="2021-12-25" class="date-pub">25 декабря 2021</time>

        <p>Этот год был весьма успешным в плане бега, я на своем организме прочувствовал как прибавил почти во всех показателях. Рассмотрим ниже все пробежки:</p>

        <table>
            <thead>
            <tr>
                <td>#</td>
                <td>Дата</td>
                <td>Расстояние (км)</td>
                <td>Время (мин)</td>
                <td>Место</td>
                <td>Температура</td>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>18.01</td>
                    <td>9.6</td>
                    <td>64</td>
                    <td>Улица</td>
                    <td>-16</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>28.01</td>
                    <td>9.6</td>
                    <td>59</td>
                    <td>Улица</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>5.02</td>
                    <td>9.6</td>
                    <td>59</td>
                    <td>Улица</td>
                    <td>-7</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>13.02</td>
                    <td>7.9</td>
                    <td>50</td>
                    <td>Улица</td>
                    <td>-11</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>10.03</td>
                    <td>9.8</td>
                    <td>59</td>
                    <td>Стадион</td>
                    <td>-4</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>18.03</td>
                    <td>10.0</td>
                    <td>59</td>
                    <td>Стадион</td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>24.03</td>
                    <td>10.1</td>
                    <td>60</td>
                    <td>Стадион</td>
                    <td></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>16.04</td>
                    <td>10.4</td>
                    <td>60</td>
                    <td>Стадион</td>
                    <td></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>22.04</td>
                    <td>10.8</td>
                    <td>60</td>
                    <td>Стадион</td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>28.04</td>
                    <td>16.2</td>
                    <td>90</td>
                    <td>Стадион</td>
                    <td></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>9.05</td>
                    <td>11.2</td>
                    <td>63</td>
                    <td>Стадион</td>
                    <td></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>30.05</td>
                    <td>15.5</td>
                    <td>85</td>
                    <td>Стадион</td>
                    <td></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>29.06</td>
                    <td>10.1</td>
                    <td>61</td>
                    <td>Стадион</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>6.07</td>
                    <td>10.2</td>
                    <td>63</td>
                    <td>Стадион</td>
                    <td></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>26.07</td>
                    <td>13.2</td>
                    <td>83</td>
                    <td>Улица</td>
                    <td></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>13.08</td>
                    <td>10.4</td>
                    <td>65</td>
                    <td>Улица</td>
                    <td></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>24.08</td>
                    <td>10.1</td>
                    <td>63</td>
                    <td>Улица</td>
                    <td></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>1.09</td>
                    <td>10.7</td>
                    <td>61</td>
                    <td>Стадион</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>7.09</td>
                    <td>11.5</td>
                    <td>69</td>
                    <td>Стадион</td>
                    <td>16</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>15.10</td>
                    <td>11.1</td>
                    <td>68</td>
                    <td>Стадион</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>21.10</td>
                    <td>11.5</td>
                    <td>69</td>
                    <td>Стадион</td>
                    <td>14</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>29.10</td>
                    <td>18.2</td>
                    <td>108</td>
                    <td>Стадион</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>4.11</td>
                    <td>12.5</td>
                    <td>72</td>
                    <td>Стадион</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>11.11</td>
                    <td>11.3</td>
                    <td>60</td>
                    <td>Улица</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>22.11</td>
                    <td>15.3</td>
                    <td>95</td>
                    <td>Улица</td>
                    <td>-6</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>3.12</td>
                    <td>13.1</td>
                    <td>79</td>
                    <td>Улица</td>
                    <td>-1</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>14.12</td>
                    <td>13.0</td>
                    <td>77</td>
                    <td>Улица</td>
                    <td>-3</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>29</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <p>Сейчас рассмотрим таблицу чуть детальнее и выделим наиболее интересные показатели:</p>
        <ul>
            <li>Общее расстояние:</li>
            <li>Максимальное расстояние:</li>
            <li>Минимальное расстояние:</li>
            <li>Средняя дистанция:</li>
            <li>Общее количество пробежек</li>
            <li>Количество пробежек по стадиону</li>
            <li>Количество пробежек по городу</li>
            <li>Максимальная температура воздуха при беге:</li>
            <li>Минимальная температура воздуха при беге:</li>
            <li>Максимальное время:</li>
            <li>Минимальное время:</li>
            <li>Среднее время:</li>
            <li>Количество рекордов: 3</li>
            <li>Дважды обновил общий личный рекорд</li>
            <li>Дважды обновил личный рекорд стадиона</li>
            <li>Один раз обновил рекорд улицы</li>
        </ul>


    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
