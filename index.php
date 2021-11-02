<?php

require "config/config.php";

// Check the color theme cookie
if (
  isset($_COOKIE["color_theme"])
  && !empty($_COOKIE["color_theme"])
) {
  $color_theme = $_COOKIE["color_theme"];
} else {
  $color_theme = "light";
}

// Change images depending of the color theme
if ($color_theme == "light") {
  $icons["theme"] = IMG_DIR . "icons/moon-dark.svg";
  $icons["linkedin"] = IMG_DIR . "icons/linkedin_black.svg";
  $icons["github"] = IMG_DIR . "icons/github_black.svg";
  $icons["gitlab"] = IMG_DIR . "icons/gitlab_black.svg";
} elseif ($color_theme == "dark") {
  $icons["theme"] = IMG_DIR . "icons/sun.svg";
  $icons["linkedin"] = IMG_DIR . "icons/linkedin_grey.svg";
  $icons["github"] = IMG_DIR . "icons/github_grey.svg";
  $icons["gitlab"] = IMG_DIR . "icons/gitlab_grey.svg";
}

$_GET["r"] = $_GET["r"] ?? "home";

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
