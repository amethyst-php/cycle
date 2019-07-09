<?php

namespace Amethyst\Fakers;

use DateTime;
use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class CycleFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('started_at', (new DateTime())->format('Y-m-d H:i:s'));
        $bag->set('started_status', 'activation');
        $bag->set('ended_At', (new DateTime())->format('Y-m-d H:i:s'));
        $bag->set('ended_status', 'termination');
        $bag->set('cyclable_type', 'foo');
        $bag->set('cyclable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
