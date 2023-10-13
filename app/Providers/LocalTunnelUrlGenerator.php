<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Routing\RouteCollection;
use Illuminate\Routing\UrlGenerator;

class LocalTunnelUrlGenerator extends UrlGenerator
{
    public function __construct(RouteCollection $routes, Request $request)
    {
        parent::__construct($routes, $request);
    }

    public function formatRoot($scheme, $root = null)
    {
        return "https://blog.localtunnel.me";
    }
}