<?php

namespace Modularavel\Laraglide\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Modularavel\Laraglide\Laraglide
 */
class LaraglideSecure extends Facade
{
    protected static function getFacadeAccessor(): LaraglideSecure|string
    {
        return \Modularavel\Laraglide\LaraglideSecure::class;
    }
}
