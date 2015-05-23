<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangeUserRequest;
use Sentry;
use Session;
use Vesta;

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
		$UserInfoLaravel = Sentry::getUser();

		return view('user/user/home', ['UserInfoLaravel' => $UserInfoLaravel]);
	}

	public function update(ChangeUserRequest $request)
	{


		Vesta::changeUserPassword($request->password);
		Vesta::changeUserEmail($request->email);

		//Смена в Laravel
		$thisUser = Sentry::getUser();
		$thisUser->password = $request->password;
		$thisUser->email    = $request->email;
		$thisUser->lang = $request->lang;
		$thisUser->save();
		Session::flash('good', 'Вы успешно изменили личные данных.');
		return redirect()->route('home.index');

	}






}
