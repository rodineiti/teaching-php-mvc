<?php

namespace Rodineiteixeira\Mvc\Core\Database;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
    /**
     * @return void
     */
    public static function start(): void
    {
        try {
            $capsule = new Capsule;

            $capsule->addConnection([
                'driver' => 'mysql',
                'host' => 'laradock-mysql-1',
                'database' => 'teaching_mvc',
                'username' => 'root',
                'password' => 'root',
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix' => '',
            ]);

            $capsule->bootEloquent();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
    }
}