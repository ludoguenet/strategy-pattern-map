<?php

declare(strict_types=1);

namespace App\Contracts;

interface RouteStrategyContract
{
    public function getRoute(): array;
}