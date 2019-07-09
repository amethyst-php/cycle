<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\CycleFaker;
use Amethyst\Managers\CycleManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class CycleTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = CycleManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = CycleFaker::class;
}
