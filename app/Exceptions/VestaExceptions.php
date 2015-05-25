<?php namespace App\Exceptions;

use Exception;

class ArgsException
{

}

class InvalidException extends Exception
{
	function  __construct($e)
	{
		//$this->message = (string) $e;
	}
}

class NotexistException
{
}

class ExistsException
{
}

class SuspendedException
{
}

class UnspendedException
{
}

class InuseException
{
}

class LimitException
{
}

class PasswordException
{
}

class ForbidenException
{
}

class DisabledException
{
}

class ParsingException
{
}

class DiskException
{
}

class LaException
{
}

class ConnectException
{
}

class FtpException
{
}

class DbException
{
}

class RrdException
{
}

class UpdateException
{
}

class RestartException
{
}



class VestaExceptions
{
	static function render(Exception $e)
	{

		switch (TRUE) {
			case $e instanceof ArgsException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof InvalidException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof NotexistException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof ExistsException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof SuspendedException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof UnspendedException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof InuseException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof LimitException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof PasswordException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof ForbidenException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof DisabledException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof ParsingException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof DiskException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof LaException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof ConnectException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof FtpException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof DbException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof RrdException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof UpdateException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			case $e instanceof RestartException:
				$return = redirect()->back()->withErrors(array($e->getMessage()));
				break;
			default:
				$return = FALSE;
		}

		return $return;
	}
}
