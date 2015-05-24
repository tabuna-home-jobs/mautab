<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests;
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
