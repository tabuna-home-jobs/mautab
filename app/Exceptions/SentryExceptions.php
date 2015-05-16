<?php namespace App\Exceptions;


use Cartalyst\Sentry\Groups;
use Cartalyst\Sentry\Throttling;
use Cartalyst\Sentry\Users;
use Exception;


class SentryExceptions
{
	static function render(Exception $e)
	{

		 switch (true) {
			case $e instanceof Users\WrongPasswordException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof Users\LoginRequiredException:
				$return =  redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof Users\UserNotFoundException:
				$return =  redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof Users\UserNotActivatedException:
				$return =  redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof Users\UserExistsException:
				$return =  redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof Users\UserAlreadyActivatedException:
				$return =  redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof Throttling\UserSuspendedException:
				$return =  redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof Throttling\UserBannedException:
				$return =  redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof Groups\NameRequiredException:
				$return =  redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof Groups\GroupExistsException:
				$return =  redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof Groups\GroupNotFoundException:
				$return =  redirect()->back()->withErrors(array($e->getMessage()));
				break;
			default:
				$return =  false;
		}

		return $return;

	}
}
