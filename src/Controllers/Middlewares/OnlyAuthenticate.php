<?php

namespace Rodineiteixeira\Mvc\Controllers\Middlewares;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

class OnlyAuthenticate implements IMiddleware
{
    /**
     * @param Request $request
     * @return void
     */
    public function handle(Request $request): void
    {
        if (!isset($_SESSION['user_id'])) {
            redirect(url('loginView'));
        }
    }
}