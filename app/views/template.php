<!DOCTYPE html>
<html lang="fr" class="<?= $color_theme ?>">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Content-Type" content="text/html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Load stylesheets -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
  <link rel="stylesheet" type="text/css" href="<?= CSS_DIR ?>style.min.css?<?= CSS_VERSION ?>" />
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

  <?php require VIEWS . "svg/paths.html" ?>

  <div id="page_num" data-page-num="<?= $page_num ?>"></div>

  <!-- Header -->
  <header id="main_header">
    <nav id="nav" class="flex">
      <ul class="flex column color-theme-3">
        <li><a href="/">Accueil</a></li>
        <li><a href="creations">Mes créations</a></li>
        <li><a href="about">à propos</a></li>
      </ul>
      <div class="round-style"></div>
    </nav>

    <div class="round-style round-style-hamburger"></div>

    <button id="hamburger" type="button">
      <span></span>
    </button>

    <div class=buttons-container>
      <div class="round-style"></div>
      <button id="change-color-theme-button" type="button">
        <img src="<?= $icons["theme"] ?>" title="Changer les couleurs" alt="Changer les couleurs" />
      </button>
    </div>

    <div id="scrollbar-container"></div>
  </header>

  <?= $content ?>

  <noscript>Impossible d'exécuter des scripts : certaines fonctions du site seront indisponibles.</noscript>
  <!-- Load libs/plugins -->
  <script defer src="<?= JS_DIR ?>libs/jquery.min.3.6.0.js"></script>
  <!-- Load main script -->
  <script defer src="<?= JS_DIR ?>utils.js?<?= JS_VERSION ?>"></script>
  <script defer src="<?= JS_DIR ?>main.js?<?= JS_VERSION ?>"></script>
  <!-- If needed, load page scripts -->
  <?= $scripts ?>
</body>

</html>