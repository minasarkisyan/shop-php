<?php

const DEBUG = 1; // 0 - production, 1 - develop
define("ROOT", dirname(__DIR__));
const WWW = ROOT . '/public';
const APP = ROOT . '/app';
const CORE = ROOT . '/vendor/shop/core';
const LIBS = ROOT . '/vendor/shop/core/libs';
const CACHE = ROOT . '/tmp/cache';
const CONF = ROOT . '/config';
const LAYOUT = 'default';

/* http://shop.loc/public/index.php */
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
/* http://shop.loc/public/ */
$app_path = preg_replace("#[^/]+$#", '', $app_path);
/* http://shop.loc */
$app_path = str_replace('/public/', '', $app_path);

define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';