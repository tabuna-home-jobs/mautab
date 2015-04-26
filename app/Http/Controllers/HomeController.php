<?php namespace App\Http\Controllers;

use App\Models\User;
use Auth;

class HomeController extends Controller {

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
		// Информация о пользователе
		$UserInfoLaravel = User::find(Auth::user()->id);

		return view('user/home', ['UserInfoLaravel' => $UserInfoLaravel]);
	}

	public function postIndex()
	{

	}






}
