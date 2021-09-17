<?php

require "config/config.php";

// Check the color theme cookie
if (
	isset($_COOKIE["color_theme"])
	&& !empty($_COOKIE["color_theme"])
) {
	$color_theme = $_COOKIE["color_theme"];
} else {
	$color_theme = "dark";
}

// Change images depending of the color theme
if ($color_theme == "light") {
	$icons["theme"] = IMG_DIR . "moon-dark.svg";
	$icons["linkedin"] = IMG_DIR . "linkedin_black.svg";
	$icons["github"] = IMG_DIR . "github_black.svg";
} elseif ($color_theme == "dark") {
	$icons["theme"] = IMG_DIR . "sun.svg";
	$icons["linkedin"] = IMG_DIR . "linkedin_grey.svg";
	$icons["github"] = IMG_DIR . "github_grey.svg";
}

// echo "<pre>"; print_r($icons);exit;

switch ($_GET["r"]) {
	case 'about':
		$page_num = "3";
		require CONTROLLERS . "about.php";
		break;

	case 'creations':
		$page_num = "2";
		require CONTROLLERS . "creations.php";
		break;

	default:
		$page_num = "1";
		require CONTROLLERS . "home.php";
		break;
}
