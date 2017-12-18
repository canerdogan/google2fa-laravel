<?php

namespace PragmaRX\Google2FALaravel\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Google2FA extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pragmarx.google2fa';
    }
}
