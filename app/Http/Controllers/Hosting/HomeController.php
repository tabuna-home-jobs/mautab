<?php namespace Mautab\Http\Controllers\Hosting;

use Auth;
use Mautab\Http\Controllers\Controller;

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

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function Index()
	{
		// Информация о пользователе
        $UserInfoLaravel = Auth::User();
		$Payments = $UserInfoLaravel->getPayments()->simplePaginate(5);

		return view('user.user.home', [
			'UserInfoLaravel' => $UserInfoLaravel,
			'Payments' => $Payments
		]);
	}






}
