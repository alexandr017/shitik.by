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
        echo renderPage('pages/blog/students.php');
        break;
    case '/blog/koronavirus' :
        echo renderPage('pages/blog/koronavirus.php');
        break;
    case '/blog/planning' :
        echo renderPage('pages/blog/planning.php');
        break;
    case '/blog/books-2020' :
        echo renderPage('pages/blog/books-2020.php');
        break;
    case '/blog/podcasts' :
        echo renderPage('pages/blog/podcasts.php');
        break;
    case '/blog/movies-imdb' :
        echo renderPage('pages/blog/movies-imdb.php');
        break;
    case '/blog/run' :
        echo renderPage('pages/blog/run.php');
        break;
    case '/blog/black-lines' :
        echo renderPage('pages/blog/black-lines.php');
        break;
    case '/blog/site-update' :
        echo renderPage('pages/blog/site-update.php');
        break;
    case '/blog/home-bay' :
        echo renderPage('pages/blog/home-bay.php');
        break;
    case '/blog/new-super-heroes' :
        echo renderPage('pages/blog/new-super-heroes.php');
        break;
    case '/blog/seats-in-the-trolleybus' :
        echo renderPage('pages/blog/seats-in-the-trolleybus.php');
        break;
    case '/blog/people-without-food' :
        echo renderPage('pages/blog/people-without-food.php');
        break;
    case '/blog/total-2021' :
        echo renderPage('pages/blog/total-2021.php');
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