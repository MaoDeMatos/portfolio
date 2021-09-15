<?php

$scripts = '<script defer src="' . JS_DIR . 'creations.js"></script>';

ob_start(); ?>

<!-- Intro section -->
<?php $intro_content = '
<h1>Mes créations</h1>

<p>
	Ici je vais présenter rapidement chacuns des projets concrets que j\'ai pu réaliser !
</p>';

require VIEWS . "intro.php";?>

<!-- Jinskow section -->
<?php include VIEWS . "creations/jinskow.html"; ?>

<!-- Php api section -->
<?php //include VIEWS . "creations/php_api.html"; ?>

<!-- Contact section -->
<?php include VIEWS . "contact.php"; ?>
<?php
$content = ob_get_clean();
require VIEWS  . "template.php";
