<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Contracts\RouteStrategyContract;

class CarRouteStrategy implements RouteStrategyContract
{
    public function getRoute(): array
    {
        return [
            'coords' => [
                [48.8566, 2.3522],
                [48.8584, 2.2945],
                [48.8606, 2.3376],
            ],
            'color' => 'blue',
        ];
    }
}