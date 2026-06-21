<?php

// Dynamically generated routes configuration via CLI Scaffolding tool.

return [
    [
        'method' => 'GET',
        'path' => '/',
        'handler' => \Parina\Modules\Public\HomeHandler::class,
        'middleware' => []
    ],
    [
        'method' => 'GET',
        'path' => '/about',
        'handler' => \Parina\Modules\Public\AboutHandler::class,
        'middleware' => []
    ],
    [
        'method' => 'GET',
        'path' => '/setup',
        'handler' => \Parina\Modules\Public\SetupHandler::class,
        'middleware' => []
    ],
    [
        'method' => 'GET',
        'path' => '/login',
        'handler' => \Parina\Modules\Public\LoginFormHandler::class,
        'middleware' => []
    ],
    [
        'method' => 'POST',
        'path' => '/login',
        'handler' => \Parina\Modules\Public\LoginCheckHandler::class,
        'middleware' => []
    ],
    [
        'method' => 'GET',
        'path' => '/comprar/credito/auto/{id}',
        'handler' => \Parina\Modules\Public\AutoPurchaseHandler::class,
        'middleware' => [
            \Parina\Shared\Middlewares\Auth::class
        ]
    ]
];
