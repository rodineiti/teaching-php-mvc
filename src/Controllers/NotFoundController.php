<?php

namespace Rodineiteixeira\Mvc\Controllers;

class NotFoundController extends Controller
{
    /**
     * Construct
     */
    public function __construct()
    {
        parent::__construct(dirname(__DIR__, 2) . "/views");
    }

    /**
     * @return void
     */
    public function index()
    {
        echo $this->view->render("404", [
            'title' => 'PHP MVC Not Found'
        ]);
    }
}