<?php

namespace Rodineiteixeira\Mvc\Controllers;

use Rodineiteixeira\Mvc\Models\User;

class UsersController extends Controller
{
    /**
     * @var User
     */
    protected $user;

    /**
     * Construct
     */
    public function __construct()
    {
        parent::__construct(dirname(__DIR__, 2) . "/views");

        $this->user = new User();
    }

    /**
     * @return void
     */
    public function index()
    {
        $users = $this->user->all();

        echo $this->view->render("users/index", [
            "title" => "PHP MVC List Users",
            "users" => $users
        ]);
    }

    /**
     * @return void
     */
    public function create()
    {
        echo $this->view->render("users/create", [
            "title" => "PHP MVC Create User"
        ]);
    }

    /**
     * @return void
     */
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

    /**
     * @param $id
     * @return void
     */
    public function edit($id)
    {
        $user = $this->getUser($id);

        echo $this->view->render("users/edit", [
            'user' => $user,
            'title' => 'PHP MVC Edit User'
        ]);
    }

    /**
     * @param $id
     * @return void
     */
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

    /**
     * @param $id
     * @return void
     */
    public function destroy($id)
    {
        $user = $this->getUser($id);

        $user->delete();

        redirect(url('users.index'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getUser($id)
    {
        $user = $this->user->find($id);

        if (!$user) {
            redirect(url('users.index'));
        }

        return $user;
    }

    /**
     * @return void
     */
    public function notFound()
    {
        echo $this->view->render("404", [
            'title' => 'PHP MVC Not Found'
        ]);
    }
}