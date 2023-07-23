<?php

namespace Pratiksoni\Einvoice\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pratiksoni\Einvoice\Einvoice
 */
class Einvoice extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Pratiksoni\Einvoice\Einvoice::class;
    }
}
