<?php

namespace Casimirorocha\Laraglide\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Casimirorocha\Laraglide\Laraglide
 */
class Laraglide extends Facade
{
    protected static function getFacadeAccessor(): Laraglide|string
    {
        return \Casimirorocha\Laraglide\Laraglide::class;
    }
}
