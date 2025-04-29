<?php

namespace Modularavel\Laraglide\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Modularavel\Laraglide\Laraglide
 */
class Laraglide extends Facade
{
    protected static function getFacadeAccessor(): Laraglide|string
    {
        return \Modularavel\Laraglide\Laraglide::class;
    }
}
