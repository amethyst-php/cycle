<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Cycle                 newEntity()
 * @method \Amethyst\Schemas\CycleSchema          getSchema()
 * @method \Amethyst\Repositories\CycleRepository getRepository()
 * @method \Amethyst\Serializers\CycleSerializer  getSerializer()
 * @method \Amethyst\Validators\CycleValidator    getValidator()
 * @method \Amethyst\Authorizers\CycleAuthorizer  getAuthorizer()
 */
class CycleManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.cycle.data.cycle';
}
