<?php

ini_set("display_errors", 1);
ini_set("error_reporting", E_ALL);
ini_set('xdebug.overload_var_dump', 1);

ob_start();
session_start();

require __DIR__ . "/../vendor/autoload.php";

use Pecee\Http\Request;
use Rodineiteixeira\Mvc\Core\Database\Database;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace("Rodineiteixeira\Mvc\Controllers");

require_once __DIR__ . '/../routes/web.php';

SimpleRouter::error(function(Request $request, \Exception $exception) {
    // Page not found
    if ($exception->getCode() == 404) {
        response()->redirect(url('notFound'));
    }

});

Database::start();
SimpleRouter::start();

ob_end_flush();