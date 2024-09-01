<?php

namespace App\Providers;

use App\Strategy\BusRouteStrategy;
use App\Strategy\CarRouteStrategy;
use App\Strategy\WalkRouteStrategy;
use Illuminate\Support\ServiceProvider;
use App\Contracts\RouteStrategyContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(RouteStrategyContract::class, function ($app, $params) {
            return match($params['type']) {
                'cars' => new CarRouteStrategy,
                'walk' => new WalkRouteStrategy,
                'bus' => new BusRouteStrategy,
            };
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
