<?php

namespace Rodineiteixeira\Mvc\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * @var string
     */
    protected $table = 'users';

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'email', 'password', 'is_admin'];
}