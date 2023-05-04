<?php

namespace Tests\Feature;

use App\Models\Users\User;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class RouteTest extends TestCase
{
    private $routes = [
        'accueil',
        
    ];

    public function testRoutes()
    {
        foreach ($this->routes as $route) {

            $this->assertTrue(Route::has($route));
            
            $response = $this->get(route($route));
            $response->assertStatus(200);
        }
    }
}