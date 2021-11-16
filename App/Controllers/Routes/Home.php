<?php

namespace App\Controllers\Routes;

use App\Controllers\Roles\RouteI;

class Home implements RouteI
{
  public static function render($params)
  {
    extract($params, EXTR_OVERWRITE);
    $page_num = 1;
    $scripts = 'home.js';

    ob_start(); ?>
    <h1>à propos de moi</h1>

    <p>
      <span class="underline bold">Mao De Matos</span> : passionné d'Arts Graphiques, mais surtout de
      <span class="bold">technologie</span> et d'<span class="bold">informatique</span>
      !
    </p>

    <p>Par ici pour en savoir plus <a href="about" class="highlighted">à propos de moi</a> !</p>
    <?php
    $intro_content = ob_get_clean();
    ob_start();

    require VIEWS . "sections/intro.php"; ?>
    <section id="section-style-languages" class="color-theme-1"></section>
<?php
    include VIEWS . "sections/creations.html";
    include VIEWS . "sections/contact.php";

    $content = ob_get_clean();

    require VIEWS . 'base.php';
  }
}
