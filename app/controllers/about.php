<?php

$scripts = '<script defer src="' . JS_DIR . 'about.js"></script>';

ob_start(); ?>

<!-- Intro section -->
<?php $intro_content = '
<h1>à propos de moi</h1>

<p>
	<span class="underline bold">Mao De Matos</span> : passionné d\'Arts Graphiques, mais surtout de <span class="highlighted">technologie</span> et d\'<span class="highlighted">informatique</span> !
</p>

<p>
	Formé dans l\'informatique et débutant dans la programmation en formation autonome, j\'apprends à	développer des applications toujours plus optimisées et ergonomiques, avec le	souci du détail !
</p>

<p>Backend, frontend, web, IA, Jeux Vidéos, je m\'intéresse à tout !</p>';

require VIEWS . "intro.php"; ?>

<!-- Skills section -->
<?php include VIEWS . "skills.html"; ?>

<!-- Contact section -->
<?php include VIEWS . "contact.php";

$content = ob_get_clean();
require VIEWS  . "template.php";
