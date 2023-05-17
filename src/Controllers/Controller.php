<?php

namespace Rodineiteixeira\Mvc\Controllers;

use League\Plates\Engine;

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = Engine::create(dirname(__DIR__, 2) . "/views", "php");
    }
}