<?php

namespace Rodineiteixeira\Mvc\Controllers;

class UsersController extends Controller
{
    public function create()
    {
        echo $this->view->render("users/create");
    }

    public function edit($id)
    {
        echo $this->view->render("users/edit", [
            'id' => $id
        ]);
    }

    public function store()
    {
        dd(input()->all());
    }

    public function destroy($id)
    {
        dd($id);
    }
}