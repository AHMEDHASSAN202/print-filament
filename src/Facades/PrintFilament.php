<?php

namespace PrintFilament\Print\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Print\Print\Print
 */
class PrintFilament extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Print\Print\PrintFilament::class;
    }
}
