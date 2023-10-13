<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->enableLocalTunnel();
    }

    private function enableLocalTunnel()
    {
        if (!app()->environment('local') || !config('app.use_local_tunnel')) {
            return;
        }

        $this->app->extend('url', function (UrlGenerator $defaultGenerator) {
            /** @var Router $router */
            $router = $this->app['router'];
            $routes = $router->getRoutes();

            return new LocalTunnelUrlGenerator($routes, $defaultGenerator->getRequest());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
