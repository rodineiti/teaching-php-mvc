<?php

namespace Rodineiteixeira\Mvc\Controllers;

use Rodineiteixeira\Mvc\Core\View\View;

class Controller
{
    /**
     * @var View
     */
    protected $view;

    /**
     * @param string|null $path
     */
    public function __construct(string $path = null)
    {
        $this->view = new View($path);
    }
}