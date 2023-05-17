<?php

namespace Rodineiteixeira\Mvc\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        echo $this->view->render("home");
    }
}