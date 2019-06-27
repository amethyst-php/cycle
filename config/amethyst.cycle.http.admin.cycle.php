<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\CyclesController::class,
    'router'     => [
        'as'     => 'cycle.',
        'prefix' => '/cycles',
    ],
];
