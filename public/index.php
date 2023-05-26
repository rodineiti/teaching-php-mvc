<?php

ini_set("display_errors", 1);
ini_set("error_reporting", E_ALL);
ini_set('xdebug.overload_var_dump', 1);

require __DIR__ . "/../vendor/autoload.php";

use Pecee\Http\Request;
use Rodineiteixeira\Mvc\Core\Database\Database;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace("Rodineiteixeira\Mvc\Controllers");
SimpleRouter::get('/', 'HomeController@index')->name('home');
SimpleRouter::get('/login', 'HomeController@login')->name('login');

/*
 * Users Route
 */
SimpleRouter::get('/users', 'UsersController@index')->name('users.index');
SimpleRouter::get('/users/create', 'UsersController@create')->name('users.create');
SimpleRouter::post('/users/store', 'UsersController@store')->name('users.store');
SimpleRouter::get('/users/edit/{id}', 'UsersController@edit')->name('users.edit');
SimpleRouter::post('/users/update/{id}', 'UsersController@update')->name('users.update');
SimpleRouter::get('/users/destroy/{id}', 'UsersController@destroy')->name('users.destroy');
SimpleRouter::get('/not-found', 'NotFoundController@index')->name('notFound');

SimpleRouter::error(function(Request $request, \Exception $exception) {
    // Page not found
    if ($exception->getCode() == 404) {
        response()->redirect(url('notFound'));
    }

});

Database::start();
SimpleRouter::start();