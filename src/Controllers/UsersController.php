<?php

namespace Rodineiteixeira\Mvc\Controllers;

class UsersController extends Controller
{
    /**
     *
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
        echo $this->view->render("users/index");
    }

    /**
     * @return void
     */
    public function create()
    {
        echo $this->view->render("users/create");
    }

    /**
     * @param $id
     * @return void
     */
    public function edit($id)
    {
        echo $this->view->render("users/edit", [
            'id' => $id
        ]);
    }

    /**
     * @return void
     */
    public function store()
    {
        dd(input()->all());
    }

    /**
     * @param $id
     * @return void
     */
    public function destroy($id)
    {
        dd($id);
    }
}