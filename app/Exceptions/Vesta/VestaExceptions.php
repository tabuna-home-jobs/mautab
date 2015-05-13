<?php namespace App\Exceptions\Vesta;


use Cartalyst\Sentry\Groups;
use Cartalyst\Sentry\Throttling;
use Cartalyst\Sentry\Users;
use Exception;


class VestaExceptions
{
	static function render(Exception $e)
	{
		return FALSE;
	}
}
