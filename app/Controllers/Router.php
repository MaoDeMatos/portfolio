<?php

namespace App\Controllers;

use App\Controllers\Routes as Routes;

class Router
{
  protected static string $req;

  protected static function setReq()
  {
    $_GET["req"] = $_GET["req"] ?? "home";

    // Remove trailing slash
    if (substr($_GET["req"], -1) == '/') {
      $_GET["req"] = substr($_GET["req"], 0, -1);
    }
    // Remove starting slash
    if (substr($_GET["req"], 0, 1) == '/') {
      $_GET["req"] = substr($_GET["req"], 1);
    }

    static::$req = $_GET["req"];
  }

  public static function route(array $params = [])
  {
    static::setReq();

    switch (static::$req) {
      case 'about':
        Routes\About::render($params);
        break;

      case 'creations':
        Routes\Creations::render($params);
        break;

      default:
        Routes\Home::render($params);
        break;
    }
  }
}
