<?php

use App\Controllers\Router;

require "config/config.php";

define("CSS_VERSION", '?v1.0.2');
define("JS_VERSION", '?v1.0.0');

// Check the color theme cookie
$color_theme = $_COOKIE["color_theme"] ?? 'light';

// Change images depending of the color theme
if ($color_theme == "dark") {
  $icons["theme"] = IMG_DIR . "icons/sun.svg";
  $icons["linkedin"] = IMG_DIR . "icons/linkedin_grey.svg";
  $icons["github"] = IMG_DIR . "icons/github_grey.svg";
  $icons["gitlab"] = IMG_DIR . "icons/gitlab_grey.svg";
  $meta_theme_color = "#252525";
} else {
  $icons["theme"] = IMG_DIR . "icons/moon-dark.svg";
  $icons["linkedin"] = IMG_DIR . "icons/linkedin_black.svg";
  $icons["github"] = IMG_DIR . "icons/github_black.svg";
  $icons["gitlab"] = IMG_DIR . "icons/gitlab_black.svg";
  $meta_theme_color = "#b9b9b9";
}

// // Debug lines
// echo '<pre>';
// print_r($_SERVER["DOCUMENT_ROOT"]);
// exit;

Router::route([
  "icons" => $icons,
  "color_theme" => $color_theme,
  "meta_theme_color" => $meta_theme_color
]);
