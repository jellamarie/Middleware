<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Global middleware
        \App\Http\Middleware\LogRequests::class, // Log all requests
    ];

    protected $routeMiddleware = [
        'checkAge' => \App\Http\Middleware\CheckAge::class,
    ];
}