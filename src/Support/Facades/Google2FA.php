<?php

namespace PragmaRX\Google2FALaravel\Support\Facades;

use Illuminate\Support\Facades\Facade;
use PragmaRX\Google2FALaravel\Support\Authenticator;

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

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public static function logout()
    {
        (new Authenticator(request()))->logout();
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public static function login()
    {
        (new Authenticator(request()))->login();
    }
}
