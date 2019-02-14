<?php

/**
 * @param null $path
 * @return string
 */
function asset($path = null)
{
    $root = think\facade\Request::rootUrl();

    $path = is_null($path) ? '' : trim($path, '/');

    return $root . ($path ? '/' . $path : $path);
}

/**
 * CSRF Token
 * @return string
 */
function csrf_token()
{
    return '<meta name="csrf-token" content="' . think\facade\Request::token() . '">';
}

/**
 * 加载函数库
 * @param array $files
 * @param string $module
 */
function load_helper($files = [], $module = '')
{
    if (!is_array($files)) {
        $files = [$files];
    }

    if (empty($module)) {
        $base_path = app_path('helpers/');
    } else {
        $base_path = app_path(strtolower($module) . '/common/');
    }

    foreach ($files as $vo) {
        $helper = $base_path . $vo . '.php';
        if (file_exists($helper)) {
            require($helper);
        }
    }
}

/**
 * 加载语言包
 * @param array $files
 * @param string $module
 */
function load_lang($files = [], $module = '')
{
    static $_LANG = [];

    if (!is_array($files)) {
        $files = [$files];
    }

    if (empty($module)) {
        $base_path = resource_path('lang/' . $GLOBALS['_CFG']['lang'] . '/');
    } else {
        $base_path = app_path(strtolower($module) . '/lang/' . $GLOBALS['_CFG']['lang'] . '/');
    }

    foreach ($files as $vo) {
        $helper = $base_path . $vo . '.php';
        $lang = null;
        if (file_exists($helper)) {
            $lang = require($helper);
            if (!is_null($lang)) {
                $_LANG = array_merge($_LANG, $lang);
            }
        }
    }

    $GLOBALS['_LANG'] = $_LANG;
}
