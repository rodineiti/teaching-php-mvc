<?php

require __DIR__ . "/../vendor/autoload.php";

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
SimpleRouter::get('/users/destroy/{id}', 'UsersController@destroy')->name('users.destroy');

SimpleRouter::start();