<?php

namespace Rodineiteixeira\Mvc\Controllers;

use Rodineiteixeira\Mvc\Models\User;

class HomeController extends Controller
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
        echo $this->view->render("home", [
            "title" => "PHP MVC Home"
        ]);
    }

    /**
     * @return void
     */
    public function loginView()
    {
        echo $this->view->render("login", [
            "title" => "PHP MVC Login"
        ]);
    }

    /**
     * @return void
     */
    public function login()
    {
        $data = input()->all();

        $user = User::where('email', $data['email'])
            ->where('password', $data['password'])->first();

        if (!$user) {
            redirect(url('loginView'));
        }

        $_SESSION['user_id'] = $user->id;

        redirect(url('home'));
    }

    /**
     * @return void
     */
    public function logout()
    {
        unset($_SESSION['user_id']);

        redirect(url('loginView'));
    }
}