<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\CycleFaker;
use Railken\Amethyst\Managers\CycleManager;
use Railken\Amethyst\Tests\BaseTest;
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
