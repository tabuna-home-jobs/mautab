<?php namespace App\Http\Controllers;

use App\Http\Requests\ChangeUserRequest;
use App\Models\User;
use Auth;
use Crypt;
use Session;
use SSH;
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

	public function putEdit(ChangeUserRequest $request)
	{

		dd("Я хуй его знаю почему он сюда не заходит!");
		//Смена в Vesta
		Vesta::changeUserPassword($request->password);
		Vesta::changeUserEmail($request->email);

		//Смена в Laravel

		$thisUser           = User::find(Auth::user()->id);
		$thisUser->password = Crypt::encrypt($request->password);
		$thisUser->email    = $request->email;
		$thisUser->save();
		Session::flash('good', 'Вы успешно изменили личные данных.');

		return redirect()->route('home.home');

	}






}
