<?php namespace Mautab\Http\Controllers\Hosting;

use Auth;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\ChangeUserRequest;
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


		$test = Vesta::listDirectory('/home/art1st/web');
		//$test = Vesta::openFile('/home/admin/web/mautab.com/public_html/readme.md');
		dd($test);

		// Информация о пользователе
        $UserInfoLaravel = Auth::User();
		$Payments = $UserInfoLaravel->getPayments()->simplePaginate(5);

		return view('user.user.home', [
			'UserInfoLaravel' => $UserInfoLaravel,
			'Payments' => $Payments
		]);
	}

	public function update(ChangeUserRequest $request)
	{


		Vesta::changeUserPassword($request->password);
		Vesta::changeUserEmail($request->email);

		//Смена в Laravel
        $thisUser = Auth::User();
		$thisUser->password = $request->password;
		$thisUser->email    = $request->email;
		$thisUser->lang = $request->lang;
		$thisUser->save();
		Session::flash('good', 'Вы успешно изменили личные данных.');

		return redirect()->route('home.index');

	}






}
