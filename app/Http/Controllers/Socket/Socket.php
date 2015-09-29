<?php namespace Mautab\Http\Controllers\Socket;

use Mautab\Http\Controllers\Controller;

class Socket extends Controller
{

    public $from;
    public $msg;

    public function __construct($from, $msg)
    {
        $this->from = $from;
        $this->msg = $msg;
    }

}