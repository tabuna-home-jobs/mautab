<?php namespace App\Http\Controllers;

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

		return view('user/logUser', ['log' => $log]);
	}


}
