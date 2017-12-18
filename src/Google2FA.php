<?php

namespace PragmaRX\Google2FALaravel;

use PragmaRX\Google2FALaravel\Support\Authenticator;

class Google2FA extends \PragmaRX\Google2FA\Google2FA
{
  /**
   * Get the registered name of the component.
   *
   * @return Authenticator
   */
  public static function auth()
  {
      return (new Authenticator(request()));
  }

  /**
   * Get the registered name of the component.
   *
   * @return boolean
   */
  public static function check()
  {
      return (new Authenticator(request()))->isAuthenticated();
  }

  /**
   * Get the registered name of the component.
   *
   * @return void
   */
  public static function logout()
  {
      (new Authenticator(request()))->logout();
  }

  /**
   * Get the registered name of the component.
   *
   * @return void
   */
  public static function login()
  {
      (new Authenticator(request()))->login();
  }
}
