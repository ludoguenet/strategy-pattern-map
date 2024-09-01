<?php

namespace App\Http\Controllers\API;

use App\Strategy\RouteContext;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Contracts\RouteStrategyContract;

class MapRouteController extends Controller
{
    public function __invoke(?string $route = null): JsonResponse
    {
        // $routes = [
        //     'cars' => [
        //         'coords' => [
        //             [48.8566, 2.3522],
        //             [48.8584, 2.2945],
        //             [48.8606, 2.3376],
        //         ],
        //         'color' => 'blue',
        //     ],
        //     'walk' => [
        //         'coords' => [
        //             [48.8606, 2.3376],
        //             [48.8625, 2.2884],
        //             [48.8647, 2.3164],
        //         ],
        //         'color' => 'green',
        //     ],
        //     'bus' => [
        //         'coords' => [
        //             [48.8647, 2.3164],
        //             [48.8668, 2.3113],
        //             [48.8842, 2.3334],
        //         ],
        //         'color' => 'red',
        //     ],
        // ];

        // return response()->json([
        //     'route' => $routes[$route ?? 'cars'],
        // ]);
            $strategy = app()->makeWith(RouteStrategyContract::class, ['type' => $route ?? 'cars']);
    
            $context = new RouteContext();
            $context->setStrategy($strategy);
    
            return response()->json([
                'route' => $context->getRoute(),
            ]);
    }
}
