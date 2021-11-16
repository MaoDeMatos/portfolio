<?php

define('APP_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/App/');
define('HOST', '/');

/**
 * Directories configuration
 * Define dir paths
 */
define('CONTROLLERS', APP_ROOT . 'Controllers/');
define('VIEWS', APP_ROOT . 'views/');

define('PUBLIC_DIR', HOST . 'public/');

define('JS_DIR', PUBLIC_DIR . 'js/');
define('CSS_DIR', PUBLIC_DIR . 'css/');
define('IMG_DIR', PUBLIC_DIR . 'img/');

require 'autoload.php';
