<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routemiddleware = [
        'checkAge' => \App\Http\Middleware\CheckAge::class,
        'logRequests' => \App\Http\Middleware\LogRequests::class,
    ];
    
}
