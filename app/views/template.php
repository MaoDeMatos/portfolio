<!DOCTYPE html>
<html lang="fr" class="dark">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html" />
	<!-- Load stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?= CSS_DIR ?>style.min.css" />
	<link rel="stylesheet" type="text/css" href="<?= CSS_DIR ?>media_queries.min.css" />
	<!-- If needed, load page CSS -->
	<?php if (isset($stylesheets) && !empty($stylesheets)) {
		echo $stylesheets;
	} ?>

	<meta name="theme-color" content="#252525" />
	<title>Mao De Matos</title>
</head>
<!-- Site internet réalisé par De Matos Mao -->
<!-- Contact à l'adresse suivante : -->
<!-- mao.dematos@gmail.com -->

<body>

	<?php require VIEWS . "svg/gradients.html" ?>

	<div id="page_num" style="display: none" data-page-num="<?= $page_num ?>"></div>

	<!-- Header -->
	<header id="main_header">
		<nav id="nav" class="flex">
			<ul class="flex column color-theme-3">
				<li><a href="/">Accueil</a></li>
				<li><a href="creations">Mes créations</a></li>
				<li><a href="about">à propos</a></li>
			</ul>
		</nav>

		<button id="hamburger" type="button">
			<span></span>
		</button>

		<div class=buttons-container>
			<!-- <a class="logo" href="/">
				<img src="<?= IMG_DIR ?>" title="Logo" alt="Logo">
			</a> -->

			<button id="change-color-theme-button" type="button">
				<img src="<?= IMG_DIR ?>sun.svg" title="Changer les couleurs" alt="Changer les couleurs" />
			</button>
		</div>

		<div id="scrollbar-container"></div>
	</header>

	<?= $content ?>

	<!-- Load libs/plugins -->
	<script defer src="<?= JS_DIR ?>libs/jquery.min.3.6.0.js"></script>
	<!-- Load main script -->
	<script defer src="<?= JS_DIR ?>functions.js"></script>
	<script defer src="<?= JS_DIR ?>main.js"></script>
	<!-- If needed, load page scripts -->
	<?= $scripts ?>
</body>

</html>