<?php

function renderPage($page) : string
{
    $res = '';
    $file = DOCUMENT_ROOT . '/' . $page;
    if (file_exists($file)) {
        $res = include $file;
    }

    return $res;
}

function includeCSS($modules) : void
{
    foreach ($modules as $module) {
        $GLOBALS['css_modules'][] = $module;
    }
}

function compressCSS($buffer) : string
{
    $buffer = preg_replace("!/\*[^*]*\*+([^/][^*]*\*+)*/!", "", $buffer);
    return str_replace(array("\r\n", "\r", "\n", "\t", "  ", "    ", "    "), "", $buffer);
}

function printCSS() : void
{
    ob_start("compressCSS");
    foreach ($GLOBALS['css_modules'] as $module) {
        $module = DOCUMENT_ROOT . '/public/themes/v3/css/' . $module . '.css';
        if (file_exists($module)) {
            echo file_get_contents($module);
        }
    }
    ob_end_flush();
}

function getSeoField($fieldName) : string
{
    $currentPage = trim($_SERVER['REQUEST_URI'],'/');
    if ($currentPage == '') {
        $currentPage = '/';
    }
    $seoArray = include DOCUMENT_ROOT . '/data/seo.php';
    if (isset($seoArray[$currentPage])) {
        if (isset($seoArray[$currentPage][$fieldName])) {
            return $seoArray[$currentPage][$fieldName];
        }
    }

    return '';
}
