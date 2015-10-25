<?php namespace Mautab\Exceptions;

use Exception;
use GuzzleHttp\Exception\ConnectException;

class GuzzleExceptions extends Exception
{
    static function render(Exception $e)
    {

        switch ($e) {
            case $e instanceof ConnectException:
                $return = redirect()->back()->withErrors([$e->message]);
                break;
            default:
                $return = false;
        }
        return $return;
    }

}
