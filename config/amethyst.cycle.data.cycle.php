<?php

return [
    'table'      => 'amethyst_cycles',
    'comment'    => 'Cycle',
    'model'      => Amethyst\Models\Cycle::class,
    'schema'     => Amethyst\Schemas\CycleSchema::class,
    'repository' => Amethyst\Repositories\CycleRepository::class,
    'serializer' => Amethyst\Serializers\CycleSerializer::class,
    'validator'  => Amethyst\Validators\CycleValidator::class,
    'authorizer' => Amethyst\Authorizers\CycleAuthorizer::class,
    'faker'      => Amethyst\Fakers\CycleFaker::class,
    'manager'    => Amethyst\Managers\CycleManager::class,
    'attributes' => [
        'started_status' => [
            'options' => [
                'activation',
                'reactivation',
            ],
        ],
        'ended_status' => [
            'options' => [
                'suspension',
                'termination',
            ],
        ],
    ],
];
