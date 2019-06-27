<?php

namespace Railken\Amethyst\Schemas;

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
            Attributes\EnumAttribute::make('cyclable_type', app('amethyst')->getMorphListable('cycle', 'cyclable'))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('cyclable_id')
                ->setRelationKey('cyclable_type')
                ->setRelationName('cyclable')
                ->setRelations(app('amethyst')->getMorphRelationable('cycle', 'cyclable'))
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
