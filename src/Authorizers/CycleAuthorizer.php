<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class CycleAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'cycle.create',
        Tokens::PERMISSION_UPDATE => 'cycle.update',
        Tokens::PERMISSION_SHOW   => 'cycle.show',
        Tokens::PERMISSION_REMOVE => 'cycle.remove',
    ];
}
