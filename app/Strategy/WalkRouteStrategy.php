<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Contracts\RouteStrategyContract;

class WalkRouteStrategy implements RouteStrategyContract
{
    public function getRoute(): array
    {
        return [
            'coords' => [
                [48.8606, 2.3376],
                [48.8625, 2.2884],
                [48.8647, 2.3164],
            ],
            'color' => 'green',
        ];
    }
}