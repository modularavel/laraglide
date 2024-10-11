<?php

namespace Casimirorocha\Laraglide\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Casimirorocha\Laraglide\Laraglide
 */
class LaraglideSecure extends Facade
{
    protected static function getFacadeAccessor(): LaraglideSecure|string
    {
        return \Casimirorocha\Laraglide\LaraglideSecure::class;
    }
}
