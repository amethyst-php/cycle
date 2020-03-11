<?php

namespace Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class CycleSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\DateTimeAttribute::make('started_at'),
            Attributes\EnumAttribute::make('started_status', config('amethyst.cycle.data.cycle.attributes.started_status.options')),
            Attributes\DateTimeAttribute::make('ended_at'),
            Attributes\EnumAttribute::make('ended_status', config('amethyst.cycle.data.cycle.attributes.ended_status.options')),
            \Amethyst\Core\Attributes\DataNameAttribute::make('cyclable_type')
                ->setRequired(true),
            Attributes\MorphToAttribute::make('cyclable_id')
                ->setRelationKey('cyclable_type')
                ->setRelationName('cyclable')
                ->setRelations(app('amethyst')->getDataManagers())
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
