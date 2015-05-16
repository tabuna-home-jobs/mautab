<?php namespace App\Exceptions;


class ArgsException extends  BadFunctionCallException
{

}

class InvalidException extends InvalidArgumentException
{
}

class NotexistException extends  UnderflowException
{
}

class ExistsException extends  UnderflowException
{
}

class SuspendedException extends  UnderflowException
{
}

class UnspendedException extends  UnderflowException
{
}

class InuseException extends  UnderflowException
{
}

class LimitException extends  UnderflowException
{
}

class PasswordException extends  UnderflowException
{
}

class ForbidenException extends  UnderflowException
{
}

class DisabledException extends  UnderflowException
{
}

class ParsingException extends  UnderflowException
{
}

class DiskException extends  UnderflowException
{
}

class LaException extends  UnderflowException
{
}

class ConnectException extends  UnderflowException
{
}

class FtpException extends  UnderflowException
{
}

class DbException extends  UnderflowException
{
}

class RrdException extends  UnderflowException
{
}

class UpdateException extends  UnderflowException
{
}

class RestartException extends  UnderflowException
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
