<?php namespace Mautab\Http\Controllers\Hosting;

use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Vesta;

class UserLogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $log = array_reverse(Vesta::listUserLog());

        return view('user/user/logUser', ['log' => $log]);
    }


}
