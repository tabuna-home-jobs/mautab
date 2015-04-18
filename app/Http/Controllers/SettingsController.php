<?php namespace App\Http\Controllers;

use Auth;
use App\Models\Tiket;
use Request;
use Session;
use Redirect;
use Form;

class SettingsController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		echo Form::model($user, array('route' => array('user.update', $user->id)));
		//return view('settings/index');
	}








}
