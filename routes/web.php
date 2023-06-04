<?php

use Pecee\SimpleRouter\SimpleRouter;
use Rodineiteixeira\Mvc\Controllers\HomeController;
use Rodineiteixeira\Mvc\Controllers\Middlewares\IsAdmin;
use Rodineiteixeira\Mvc\Controllers\Middlewares\Authenticate;
use Rodineiteixeira\Mvc\Controllers\Middlewares\OnlyAuthenticate;

SimpleRouter::get('/login', [HomeController::class, 'loginView'])->name('loginView')->addMiddleware(Authenticate::class);
SimpleRouter::post('/login', [HomeController::class, 'login'])->name('login');

SimpleRouter::get('/not-found', 'NotFoundController@index')->name('notFound');

SimpleRouter::group(['middleware' => OnlyAuthenticate::class], function () {
    SimpleRouter::get('/', 'HomeController@index')->name('home');
    SimpleRouter::get('/logout', 'HomeController@logout')->name('logout');

    SimpleRouter::group(['middleware' => IsAdmin::class], function () {
        SimpleRouter::get('/users', 'UsersController@index')->name('users.index');
        SimpleRouter::get('/users/create', 'UsersController@create')->name('users.create');
        SimpleRouter::post('/users/store', 'UsersController@store')->name('users.store');
        SimpleRouter::get('/users/edit/{id}', 'UsersController@edit')->name('users.edit');
        SimpleRouter::post('/users/update/{id}', 'UsersController@update')->name('users.update');
        SimpleRouter::get('/users/destroy/{id}', 'UsersController@destroy')->name('users.destroy');
    });

});