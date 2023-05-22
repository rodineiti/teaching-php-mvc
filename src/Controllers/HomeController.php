<?php

namespace Rodineiteixeira\Mvc\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct(dirname(__DIR__, 2) . "/views");
    }

    public function index()
    {
        echo $this->view->render("home");
    }

    public function login()
    {
        echo $this->view->render("login");
    }
}