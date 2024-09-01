<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Contracts\RouteStrategyContract;

class RouteContext
{
    private RouteStrategyContract $strategy;

    public function setStrategy(RouteStrategyContract $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function getRoute(): array
    {
        return $this->strategy->getRoute();
    }
}