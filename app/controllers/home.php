<?php

$scripts = '<script defer src="' . JS_DIR . 'home.js"></script>';

ob_start(); ?>
<!-- Intro section -->
<?php $intro_content = '
<h1>à propos de moi</h1>

<p>
	<span class="underline bold">Mao De Matos</span
	>
	: passionné d\'Arts Graphiques, mais surtout de
	<span class="highlighted">technologie</span> et d\'<span class="highlighted"
		>informatique</span
	>
	!
</p>

<p>Par ici pour en savoir plus <a href="about">à propos de moi</a> !</p>';

require VIEWS . "intro.php";?>

<section id="section-style-languages" class="color-theme-1"></section>

<!-- Creations section -->
<?php include VIEWS . "creations.html"; ?>

<!-- Contact section -->
<?php include VIEWS . "contact.php"; ?>
<?php
$content = ob_get_clean();
require VIEWS  . "template.php";
