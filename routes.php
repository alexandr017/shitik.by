<?php
switch ($_SERVER['REQUEST_URI']) {
    case '/' :
        echo renderPage('pages/index.php');
        break;
    case '/alexandr-andreevich' :
        echo renderPage('pages/about.php');
        break;
    case '/blog' :
        echo renderPage('pages/blog/index.php');
        break;
    case '/blog/students' :
        echo renderPage('pages/blog/2019/students.php');
        break;
    case '/blog/koronavirus' :
        echo renderPage('pages/blog/2020/koronavirus.php');
        break;
    case '/blog/planning' :
        echo renderPage('pages/blog/2020/planning.php');
        break;
    case '/blog/books-2020' :
        echo renderPage('pages/blog/2020/books-2020.php');
        break;
    case '/blog/podcasts' :
        echo renderPage('pages/blog/2021/podcasts.php');
        break;
    case '/blog/movies-imdb' :
        echo renderPage('pages/blog/2021/movies-imdb.php');
        break;
    case '/blog/run' :
        echo renderPage('pages/blog/2021/run.php');
        break;
    case '/blog/black-lines' :
        echo renderPage('pages/blog/2021/black-lines.php');
        break;
    case '/blog/site-update' :
        echo renderPage('pages/blog/2021/site-update.php');
        break;
    case '/blog/home-bay' :
        echo renderPage('pages/blog/2021/home-bay.php');
        break;
    case '/blog/new-super-heroes' :
        echo renderPage('pages/blog/2021/new-super-heroes.php');
        break;
    case '/blog/seats-in-the-trolleybus' :
        echo renderPage('pages/blog/2021/seats-in-the-trolleybus.php');
        break;
    case '/blog/people-without-food' :
        echo renderPage('pages/blog/2021/people-without-food.php');
        break;
    case '/blog/books-2021' :
        echo renderPage('pages/blog/2021/books-2021.php');
        break;
    case '/blog/run-2018-2020' :
        echo renderPage('pages/blog/2021/run-2018-2020.php');
        break;
    case '/blog/run-2021' :
        echo renderPage('pages/blog/2021/run-2021.php');
        break;
    case '/blog/total-2021' :
        echo renderPage('pages/blog/2021/total-2021.php');
        break;
    case '/blog/kinopoisk-250' :
        echo renderPage('pages/blog/2021/kinopoisk-250.php');
        break;
    case '/portfolio' :
        echo renderPage('pages/portfolio.php');
        break;
    case '/travels' :
        echo renderPage('pages/travels.php');
        break;
    case '/projects' :
        echo renderPage('pages/projects.php');
        break;
    case '/library' :
    case '/library?show_type=short-list' :
    case '/library?show_type=full-list' :
        echo renderPage('pages/library.php');
        break;
    case '/stats' :
        echo renderPage('pages/stats.php');
        break;
    case '/site' :
        echo renderPage('pages/site.php');
        break;
    case '/sitemap' :
        echo renderPage('pages/sitemap.php');
        break;
    case '/load-book' :
        echo renderPage('ajax/load-book.php');
        break;


    default:
        renderPage('errors/404');
}