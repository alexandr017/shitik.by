<?php

$currentRoute = $_SERVER['REQUEST_URI'];

if (! in_array($currentRoute, ['/library?show_type=short-list', '/library?show_type=full-list'])) {
    if (str_contains($currentRoute, "?")) {
        $currentRoute = strstr($currentRoute, "?", true);
    }
}

$template = match ($currentRoute) {
    '/' => 'pages/index.php',
    '/alexandr-andreevich' => 'pages/about.php',
    '/blog' => 'pages/blog/index.php',
    '/blog/students' => 'pages/blog/2019/students.php',
    '/blog/koronavirus' => 'pages/blog/2020/koronavirus.php',
    '/blog/planning' => 'pages/blog/2020/planning.php',
    '/blog/books-2020' => 'pages/blog/2020/books-2020.php',
    '/blog/podcasts' => 'pages/blog/2021/podcasts.php',
    '/blog/movies-imdb' => 'pages/blog/2021/movies-imdb.php',
    '/blog/run' => 'pages/blog/2021/run.php',
    '/blog/black-lines' => 'pages/blog/2021/black-lines.php',
    '/blog/site-update' => 'pages/blog/2021/site-update.php',
    '/blog/home-bay' => 'pages/blog/2021/home-bay.php',
    '/blog/new-super-heroes' => 'pages/blog/2021/new-super-heroes.php',
    '/blog/seats-in-the-trolleybus' => 'pages/blog/2021/seats-in-the-trolleybus.php',
    '/blog/people-without-food'=> 'pages/blog/2021/people-without-food.php',
    '/blog/books-2021'=> 'pages/blog/2021/books-2021.php',
    '/blog/run-2018-2020' => 'pages/blog/2021/run-2018-2020.php',
    '/blog/run-2021' => 'pages/blog/2021/run-2021.php',
    '/blog/total-2021' => 'pages/blog/2021/total-2021.php',
    '/blog/kinopoisk-250' => 'pages/blog/2021/kinopoisk-250.php',
    '/blog/seo' => 'pages/blog/2022/seo.php',
    '/blog/world-cup-2022' => 'pages/blog/2022/world-cup-2022.php',
    '/blog/run-2022' => 'pages/blog/2022/run-2022.php',
    '/blog/books-2022' => 'pages/blog/2022/books-2022.php',
    '/blog/total-2022' => 'pages/blog/2022/total-2022.php',
    '/blog/car-in-winter' => 'pages/blog/2023/car-in-winter.php',
    '/blog/does-the-soul-exist' => 'pages/blog/2023/does-the-soul-exist.php',
    '/blog/earth-overpopulation' => 'pages/blog/2023/earth-overpopulation.php',
    '/blog/monopolies' => 'pages/blog/2023/monopolies.php',
    '/blog/scrum-and-sprint-life' => 'pages/blog/2023/scrum-and-sprint-life.php',
    '/blog/expensive-apartment-renovation' => 'pages/blog/2023/expensive-apartment-renovation.php',
    '/blog/kidney-stone' => 'pages/blog/2023/kidney-stone.php',
    '/blog/immediate-reward' => 'pages/blog/2023/immediate-reward.php',
    '/blog/rich-brazil-and-argentina' => 'pages/blog/2023/rich-brazil-and-argentina.php',
    '/blog/marvel-and-dc-without-a-plot' => 'pages/blog/2023/marvel-and-dc-without-a-plot.php',
    '/blog/weight-and-mass' => 'pages/blog/2023/weight-and-mass.php',
    '/blog/winning-lotteries' => 'pages/blog/2023/winning-lotteries.php',
    '/blog/following-in-the-footsteps-of-hocking-and-tyson' => 'pages/blog/2023/following-in-the-footsteps-of-hocking-and-tyson.php',
    '/blog/space-objects' => 'pages/blog/2023/space-objects.php',
    '/blog/fear-of-criticism' => 'pages/blog/2023/fear-of-criticism.php',
    '/blog/tips-for-motorists' => 'pages/blog/2023/tips-for-motorists.php',
    '/blog/run-2023' => 'pages/blog/2023/run-2023.php',
    '/blog/books-2023' => 'pages/blog/2023/books-2023.php',
    '/blog/total-2023' => 'pages/blog/2023/total-2023.php',
    '/blog/steve-jobs-and-pixar' => 'pages/blog/2024/steve-jobs-and-pixar.php',
    '/blog/time-magazine-person-of-the-year' => 'pages/blog/2024/time-magazine-person-of-the-year.php',
    '/blog/short-cartoons' => 'pages/blog/2024/short-cartoons.php',
    '/portfolio' => 'pages/portfolio.php',
    '/travels' => 'pages/travels.php',
    '/projects' => 'pages/projects.php',
    '/library', '/library?show_type=short-list', '/library?show_type=full-list' => 'pages/library.php',
    '/stats' => 'pages/stats.php',
    '/site' => 'pages/site.php',
    '/sitemap' => 'pages/sitemap.php',
    '/load-book' =>'ajax/load-book.php',
    default => 'errors/404.php'
};

echo renderPage($template);