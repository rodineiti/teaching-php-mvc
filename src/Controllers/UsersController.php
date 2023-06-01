<?php

namespace Rodineiteixeira\Mvc\Controllers;

use Rodineiteixeira\Mvc\Models\User;

class UsersController extends Controller
{
    protected $user;

    public function __construct()
    {
        parent::__construct(dirname(__DIR__, 2) . "/views");

        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->all();

        echo $this->view->render("users/index", [
            "title" => "PHP MVC List Users",
            "users" => $users
        ]);
    }

    public function create()
    {
        echo $this->view->render("users/create", [
            "title" => "PHP MVC Create User"
        ]);
    }

    public function store()
    {
        $data = input()->all();

        $this->user->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'is_admin' => $data['is_admin'],
        ]);

        redirect(url('users.index'));
    }

    public function edit($id)
    {
        $user = $this->getUser($id);

        echo $this->view->render("users/edit", [
            'user' => $user,
            'title' => 'PHP MVC Edit User'
        ]);
    }

    public function update($id)
    {
        $data = input()->all();

        $user = $this->getUser($id);

        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'is_admin' => $data['is_admin'],
        ]);

        redirect(url('users.index'));
    }

    public function destroy($id)
    {
        $user = $this->getUser($id);

        $user->delete();

        redirect(url('users.index'));
    }

    public function getUser($id)
    {
        $user = $this->user->find($id);

        if (!$user) {
            redirect(url('users.index'));
        }

        return $user;
    }

    public function notFound()
    {
        echo $this->view->render("404", [
            'title' => 'PHP MVC Not Found'
        ]);
    }
}