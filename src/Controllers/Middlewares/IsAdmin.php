<?php

namespace Rodineiteixeira\Mvc\Controllers\Middlewares;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

class IsAdmin implements IMiddleware
{
    /**
     * @param Request $request
     * @return void
     */
    public function handle(Request $request): void
    {
        if (check() && user()->is_admin != '1') {
            redirect(url('home'));
        }
    }
}