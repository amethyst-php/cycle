<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\CyclesController::class,
    'router'     => [
        'as'     => 'cycle.',
        'prefix' => '/cycles',
    ],
];
