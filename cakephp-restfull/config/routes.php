<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::prefix('api/v1', function (RouteBuilder $routes) {
    $routes->extensions(['json']);
    $routes->resources('Accounts');
    $routes->resources('Banks');
    $routes->resources('Users');
    Router::connect('/api/v1/users/register', ['controller' => 'Users', 'action' => 'add', 'prefix' => 'api/v1']);
    Router::connect('/api/v1/users/token', ['controller' => 'Users', 'action' => 'token', 'prefix' => 'api/v1']);

    $routes->fallbacks(DashedRoute::class);
});

Plugin::routes();
