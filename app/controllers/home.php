<?php

$scripts = '<script defer src="' . JS_DIR . 'home.js"></script>';

ob_start(); ?>
<section id="section-style-start" class="color-theme-1"></section>

<!-- Intro section -->
<?php $intro_content = '
<h1>à propos de moi</h1>

<p>
	<span class="underline bold">Mao De Matos</span
	>
	: passionné d\'Arts Graphiques, de musique, mais surtout de
	<span class="highlighted">technologie</span> et d\'<span class="highlighted"
		>informatique</span
	>
	!
</p>

<p>
	Formé dans l\'informatique et débutant dans la programmation, j\'apprends à
	développer des applications toujours plus optimisés et ergonomiques, avec le
	souci du détail !
</p>

<p>Backend, frontend, web, IA, Jeux Vidéos, je m\'intéresse à tout !</p>

<p>Par ici pour tout savoir <a href="about">à propos de moi</a> !</p>';

require VIEWS . "intro.php";?>

<!-- Creations section -->
<?php include VIEWS . "creations.html"; ?>

<!-- Contact section -->
<?php include VIEWS . "contact.php"; ?>
<?php
$content = ob_get_clean();
require VIEWS  . "template.php";
