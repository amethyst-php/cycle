<?php

return [
    'table'      => 'amethyst_cycles',
    'comment'    => 'Cycle',
    'model'      => Railken\Amethyst\Models\Cycle::class,
    'schema'     => Railken\Amethyst\Schemas\CycleSchema::class,
    'repository' => Railken\Amethyst\Repositories\CycleRepository::class,
    'serializer' => Railken\Amethyst\Serializers\CycleSerializer::class,
    'validator'  => Railken\Amethyst\Validators\CycleValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\CycleAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\CycleFaker::class,
    'manager'    => Railken\Amethyst\Managers\CycleManager::class,
    'attributes' => [
        'started_status' => [
            'options' => [
                'activation',
                'reactivation'
            ]
        ],
        'ended_status' => [
            'options' => [
                'suspension',
                'termination'
            ]
        ]
    ]
];
