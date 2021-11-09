<?php

namespace App\Controllers\Routes;

use App\Controllers\Roles\RouteI;

class Creations implements RouteI
{
  public static function render($params)
  {
    extract($params, EXTR_OVERWRITE);
    $page_num = 2;
    $stylesheets = 'creations.min.css';
    $scripts = 'creations.js';

    ob_start(); ?>
    <h1>Mes créations</h1>

    <p>
      Ici je vais présenter rapidement chacuns des projets concrets que j'ai pu réaliser !
    </p>
<?php
    $intro_content = ob_get_clean();
    ob_start();

    require VIEWS . "sections/intro.php";
    include VIEWS . "creations/jinskow.html";
    include VIEWS . "creations/php_api.html";
    include VIEWS . "creations/portfolio.html";
    include VIEWS . "sections/contact.php";

    $content = ob_get_clean();

    require VIEWS . 'base.php';
  }
}
