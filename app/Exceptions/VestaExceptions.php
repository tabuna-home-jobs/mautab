<?php namespace Mautab\Exceptions;

use Exception;

class VestaExceptions extends Exception
{
	static function render(Exception $e)
	{

		switch ($e->message) {
			case 1:
				$return = redirect()->back()->withErrors(array('Not enough arguments provided'));
				break;
			case 2:
				$return = redirect()->back()->withErrors(array('Object or argument is not valid'));
				break;
			case 3:
				$return = redirect()->back()->withErrors(array("Object doesn't exist"));
				break;
			case 4:
				$return = redirect()->back()->withErrors(array('Object already exists'));
				break;
			case 5:
				$return = redirect()->back()->withErrors(array('Object is suspended'));
				break;
			case 6:
				$return = redirect()->back()->withErrors(array('Object is already unsuspended'));
				break;
			case 7:
				$return = redirect()->back()->withErrors(array("Object can't be deleted because is used by the other object"));
				break;
			case 8:
				$return = redirect()->back()->withErrors(array('Object cannot be created because of hosting package limits'));
				break;
			case 9:
				$return = redirect()->back()->withErrors(array('Wrong password'));
				break;
			case 10:
				$return = redirect()->back()->withErrors(array('Object cannot be accessed be the user'));
				break;
			case 11:
				$return = redirect()->back()->withErrors(array('Subsystem is disabled'));
				break;
			case 12:
				$return = redirect()->back()->withErrors(array('Configuration is broken'));
				break;
			case 13:
				$return = redirect()->back()->withErrors(array('Not enough disk space to complete the action'));
				break;
			case 14:
				$return = redirect()->back()->withErrors(array('Server is to busy to complete the action'));
				break;
			case 15:
				$return = redirect()->back()->withErrors(array('Connection failed. Host is unreachable'));
				break;
			case 16:
				$return = redirect()->back()->withErrors(array('FTP server is not responding'));
				break;
			case 17:
				$return = redirect()->back()->withErrors(array('Database server is not responding'));
				break;
			case 18:
				$return = redirect()->back()->withErrors(array('RRDtool failed to update the database'));
				break;
			case 19:
				$return = redirect()->back()->withErrors(array('Update operation failed'));
				break;
			case 20:
				$return = redirect()->back()->withErrors(array('Service restart failed'));
				break;
			default:
				$return = FALSE;
		}
		return $return;
	}

}
