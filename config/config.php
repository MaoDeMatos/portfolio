<?php

// URLs configuration
define('APP_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/app/');
define('HOST', '/');

/**
 * Directories configuration
 * Define dir paths
 */
define('CONTROLLERS', APP_ROOT . 'controllers/');
define('VIEWS', APP_ROOT . 'views/');
define('CLASSES', APP_ROOT . 'classes/');

define('PUBLIC_DIR', HOST . 'src/');

define('JS_DIR', PUBLIC_DIR . 'js/');
define('CSS_DIR', PUBLIC_DIR . 'css/');
define('IMG_DIR', PUBLIC_DIR . 'img/');

// Debug line
// echo '<pre>'; print_r(get_defined_constants(true)); exit;

// Class autoloader

// spl_autoload_register(function ($c) {
// 	// Search in the models dir
// 	if (file_exists(CLASSES . $c . '.php')) {
// 		require_once CLASSES . $c . '.php';
// 	} elseif (file_exists(MODELS . $c . '.php')) {
// 		require_once MODELS . $c . '.php';
// 		// Search in the controllers dir
// 	} elseif (file_exists(CONTROLLERS . $c . '.php')) {
// 		require_once CONTROLLERS . $c . '.php';
// 		// Search in the classes dir
// 	}
// });
