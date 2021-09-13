<?php

require "config/config.php";

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
