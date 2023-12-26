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

        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Дата</th>
                <th>Расстояние (км)</th>
                <th>Время (мин)</th>
                <th>Место</th>
                <th>Температура</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>10.01</td>
                <td>11,6</td>
                <td>Улица</td>
                <td>81</td>
                <td>-4</td>
            </tr>
            <tr>
                <td>2</td>
                <td>23.01</td>
                <td>11,4</td>
                <td>Улица</td>
                <td>74</td>
                <td>-1</td>
            </tr>
            <tr>
                <td>3</td>
                <td>02.02</td>
                <td>12,1</td>
                <td>Улица</td>
                <td>78</td>
                <td>0</td>
            </tr>
            <tr>
                <td>4</td>
                <td>10.02</td>
                <td>12,7</td>
                <td>Улица</td>
                <td>83</td>
                <td>-1</td>
            </tr>
            <tr>
                <td>5</td>
                <td>22.02</td>
                <td>11,6</td>
                <td>Улица</td>
                <td>73</td>
                <td>-4</td>
            </tr>
            <tr>
                <td>6</td>
                <td>27.02</td>
                <td>12,5</td>
                <td>Улица</td>
                <td>83</td>
                <td>-5</td>
            </tr>
            <tr>
                <td>7</td>
                <td>20.03</td>
                <td>11,4</td>
                <td>Улица</td>
                <td>75</td>
                <td>7</td>
            </tr>
            <tr>
                <td>8</td>
                <td>06.04</td>
                <td>12,4</td>
                <td>Улица</td>
                <td>80</td>
                <td>12</td>
            </tr>
            <tr>
                <td>9</td>
                <td>11.04</td>
                <td>11,9</td>
                <td>Улица</td>
                <td>80</td>
                <td>11</td>
            </tr>
            <tr>
                <td>10</td>
                <td>21.04</td>
                <td>11,5</td>
                <td>Улица</td>
                <td>75</td>
                <td>15</td>
            </tr>
            <tr>
                <td>11</td>
                <td>28.04</td>
                <td>12</td>
                <td>Улица</td>
                <td>77</td>
                <td>11</td>
            </tr>
            <tr>
                <td>12</td>
                <td>10.05</td>
                <td>11,9</td>
                <td>Улица</td>
                <td>76</td>
                <td>14</td>
            </tr>
            <tr>
                <td>13</td>
                <td>29.05</td>
                <td>6,1</td>
                <td>Улица</td>
                <td>40</td>
                <td>21</td>
            </tr>
            <tr>
                <td>14</td>
                <td>01.06</td>
                <td>7,1</td>
                <td>Улица</td>
                <td>44</td>
                <td>18</td>
            </tr>
            <tr>
                <td>15</td>
                <td>06.06</td>
                <td>7,1</td>
                <td>Улица</td>
                <td>48</td>
                <td>21</td>
            </tr>
            <tr>
                <td>16</td>
                <td>13.06</td>
                <td>7,4</td>
                <td>Улица</td>
                <td>46</td>
                <td>21</td>
            </tr>
            <tr>
                <td>17</td>
                <td>27.06</td>
                <td>7,8</td>
                <td>Улица</td>
                <td>49</td>
                <td>20</td>
            </tr>
            <tr>
                <td>18</td>
                <td>12.07</td>
                <td>8,7</td>
                <td>Улица</td>
                <td>59</td>
                <td>25</td>
            </tr>
            <tr>
                <td>19</td>
                <td>20.07</td>
                <td>10,9</td>
                <td>Улица</td>
                <td>71</td>
                <td>21</td>
            </tr>
            <tr>
                <td>20</td>
                <td>26.07</td>
                <td>12,3</td>
                <td>Улица</td>
                <td>79</td>
                <td>22</td>
            </tr>
            <tr>
                <td>21</td>
                <td>03.08</td>
                <td>12,8</td>
                <td>Улица</td>
                <td>84</td>
                <td>25</td>
            </tr>
            <tr>
                <td>22</td>
                <td>09.08</td>
                <td>15</td>
                <td>Улица</td>
                <td>90</td>
                <td>19</td>
            </tr>
            <tr>
                <td>23</td>
                <td>22.08</td>
                <td>12,1</td>
                <td>Улица</td>
                <td>81</td>
                <td>21</td>
            </tr>
            <tr>
                <td>24</td>
                <td>30.08</td>
                <td>10,1</td>
                <td>Улица</td>
                <td>62</td>
                <td>20</td>
            </tr>
            <tr>
                <td>25</td>
                <td>11.09</td>
                <td>10,9</td>
                <td>Улица</td>
                <td>69</td>
                <td>20</td>
            </tr>
            <tr>
                <td>26</td>
                <td>18.09</td>
                <td>11,6</td>
                <td>Улица</td>
                <td>69</td>
                <td>21</td>
            </tr>
            <tr>
                <td>27</td>
                <td>25.09</td>
                <td>12,3</td>
                <td>Улица</td>
                <td>77</td>
                <td>17</td>
            </tr>
            <tr>
                <td>28</td>
                <td>16.10</td>
                <td>11,5</td>
                <td>Улица</td>
                <td>76</td>
                <td>6</td>
            </tr>
            <tr>
                <td>29</td>
                <td>23.10</td>
                <td>11,6</td>
                <td>Улица</td>
                <td>73</td>
                <td>9</td>
            </tr>
            <tr>
                <td>30</td>
                <td>30.10</td>
                <td>13</td>
                <td>Улица</td>
                <td>84</td>
                <td>10</td>
            </tr>
            <tr>
                <td>31</td>
                <td>09.11</td>
                <td>12,2</td>
                <td>Улица</td>
                <td>75</td>
                <td>8</td>
            </tr>
            <tr>
                <td>32</td>
                <td>13.11</td>
                <td>12,1</td>
                <td>Улица</td>
                <td>76</td>
                <td>5</td>
            </tr>
            <tr>
                <td>33</td>
                <td>20.11</td>
                <td>11,4</td>
                <td>Улица</td>
                <td>73</td>
                <td>-3</td>
            </tr>
            <tr>
                <td>34</td>
                <td>30.11</td>
                <td>11,1</td>
                <td>Улица</td>
                <td>72</td>
                <td>-7</td>
            </tr>
            <tr>
                <td>35</td>
                <td>04.12</td>
                <td>11,3</td>
                <td>Улица</td>
                <td>74</td>
                <td>-3</td>
            </tr>
            <tr>
                <td>36</td>
                <td>11.12</td>
                <td>11,1</td>
                <td>Улица</td>
                <td>74</td>
                <td>-2</td>
            </tr>
            <tr>
                <td>37</td>
                <td>18.12</td>
                <td>11,3</td>
                <td>Улица</td>
                <td>70</td>
                <td>5</td>
            </tr>
            <tr>
                <td>38</td>
                <td>25.12</td>
                <td>11,4</td>
                <td>Улица</td>
                <td>68</td>
                <td>5</td>
            </tr>
        </tbody>
        </table>

        <p>График пробежек за 2023 год:</p>

        ГРАФИК

        <p>Общее количество пробежек по годам:</p>

        ГРАФИК

        <p>Суммарное расстояние (км) по годам:</p>

        ГРАФИК

        <p>Максимальное расстояние (км) по годам:</p>

        ГРАФИК

        <p>Минимальное расстояние (км) по годам:</p>

        ГРАФИК

        <p>Среднее расстояние (км) по годам:</p>

        ГРАФИК

        <p>Минимальное время (мин) по годам:</p>

        ГРАФИК

        <p>Среднее время (мин) по годам:</p>

        ГРАФИК


    </article>

</main>
<?php include DOCUMENT_ROOT . '/view/v3/footer.php'; ?>
<?php include DOCUMENT_ROOT . '/view/v3/js-scripts.php'; ?>
</body>
</html>
