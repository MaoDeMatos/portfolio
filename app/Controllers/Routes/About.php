<?php

namespace App\Controllers\Routes;

use App\Controllers\Roles\RouteI;

class About implements RouteI
{
  public static function render($params)
  {
    extract($params, EXTR_OVERWRITE);
    $page_num = 3;
    $scripts = 'about.js';

    ob_start(); ?>
    <h1>à propos de moi</h1>

    <p>
      <span class="underline bold">Mao De Matos</span> : passionné d'Arts Graphiques, mais surtout de <span class="bold">technologie</span> et d'<span class="bold">informatique</span> !
    </p>

    <p>
      Formé dans l'informatique et débutant dans la programmation en formation autonome, j'apprends à développer des applications toujours plus optimisées et ergonomiques, avec le souci du détail !
    </p>

    <p>Backend, frontend, web, IA, Jeux Vidéos, je m'intéresse à tout !</p>
<?php
    $intro_content = ob_get_clean();
    ob_start();

    include VIEWS . "sections/intro.php";
    include VIEWS . "skills.html";
    include VIEWS . "sections/contact.php";

    $content = ob_get_clean();

    require VIEWS . 'base.php';
  }
}
