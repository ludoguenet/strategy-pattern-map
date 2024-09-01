<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Contracts\RouteStrategyContract;

class BusRouteStrategy implements RouteStrategyContract
{
    public function getRoute(): array
    {
        return [
            'coords' => [
                [48.8647, 2.3164],
                [48.8668, 2.3113],
                [48.8842, 2.3334],
            ],
            'color' => 'red',
        ];
    }
}