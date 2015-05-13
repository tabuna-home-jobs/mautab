<?php namespace App\Exceptions\Sentry;


use Cartalyst\Sentry\Groups;
use Cartalyst\Sentry\Throttling;
use Cartalyst\Sentry\Users;
use Exception;


class SentryExceptions
{
	static function render(Exception $e)
	{

		if ($e instanceof Users\WrongPasswordException) {
			return redirect()->back()->withErrors(array($e->getMessage()));
		}

		if ($e instanceof Users\LoginRequiredException) {
			return redirect()->back()->withErrors(array($e->getMessage()));
		}

		if ($e instanceof Users\UserNotFoundException) {
			return redirect()->back()->withErrors(array($e->getMessage()));
		}

		if ($e instanceof Users\UserNotActivatedException) {
			return redirect()->back()->withErrors(array($e->getMessage()));
		}

		if ($e instanceof Users\UserExistsException) {
			return redirect()->back()->withErrors(array($e->getMessage()));
		}

		if ($e instanceof Users\UserAlreadyActivatedException) {
			return redirect()->back()->withErrors(array($e->getMessage()));
		}


		if ($e instanceof Throttling\UserSuspendedException) {
			return redirect()->back()->withErrors(array($e->getMessage()));
		}
		if ($e instanceof Throttling\UserBannedException) {
			return redirect()->back()->withErrors(array($e->getMessage()));
		}


		if ($e instanceof Groups\NameRequiredException) {
			return redirect()->back()->withErrors(array($e->getMessage()));
		}

		if ($e instanceof Groups\GroupExistsException) {
			return redirect()->back()->withErrors(array($e->getMessage()));
		}

		if ($e instanceof Groups\GroupNotFoundException) {
			return redirect()->back()->withErrors(array($e->getMessage()));
		}


		return FALSE;


	}
}
