<?php

function renderPage($page) {
    $file = DOCUMENT_ROOT . '/' . $page;
    if (file_exists($file)) {
        include $file;
    }
}

function includeCSS($modules) {
    foreach ($modules as $module) {
        $GLOBALS['css_modules'][] = $module;
    }
}

function compressCSS($buffer) {
    $buffer = preg_replace("!/\*[^*]*\*+([^/][^*]*\*+)*/!", "", $buffer);
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", "  ", "    ", "    "), "", $buffer);

    return $buffer;
}

function printCSS() {
    ob_start("compressCSS");
    foreach ($GLOBALS['css_modules'] as $module) {
        $module = DOCUMENT_ROOT . '/public/themes/v3/css/' . $module . '.css';
        if (file_exists($module)) {
            echo file_get_contents($module);
        }
    }
    ob_end_flush();
}

function getSeoField($fieldName) {
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
