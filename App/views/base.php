<?php
$stylesheets = isset($stylesheets)
  ? '<link rel="stylesheet" type="text/css" href="' . CSS_DIR . $stylesheets . CSS_VERSION . '" />'
  : "";
$scripts = isset($scripts)
  ? '<script defer src="' . JS_DIR . $scripts . JS_VERSION . '"></script>'
  : "";
?>
<!DOCTYPE html>
<html lang="fr" class="<?= $color_theme ?>">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Pour en savoir plus sur moi, Mao !" />
  <meta name="theme-color" content="<?= $meta_theme_color ?>" />

  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="<?= CSS_DIR ?>style.min.css<?= CSS_VERSION ?>" />
  <?= $stylesheets ?>

  <title>Mao De Matos</title>
</head>
<!-- Site internet réalisé par De Matos Mao -->
<!-- Contact à l'adresse suivante : -->
<!-- mao.dematos@gmail.com -->

<body>

  <?php require VIEWS . "svg/paths.html" ?>

  <div id="page_num" data-page-num="<?= $page_num ?>"></div>

  <?php require VIEWS . 'header.php'; ?>

  <?= $content ?>

  <noscript>Impossible d'exécuter des scripts : certaines fonctions du site seront indisponibles.</noscript>
  <!-- Libs/plugins -->
  <script defer src="<?= JS_DIR ?>libs/jquery.min.3.6.0.js"></script>
  <!-- Main scripts -->
  <script defer src="<?= JS_DIR ?>utils.js<?= JS_VERSION ?>"></script>
  <script defer src="<?= JS_DIR ?>main.js<?= JS_VERSION ?>"></script>
  <?= $scripts ?>
</body>

</html>