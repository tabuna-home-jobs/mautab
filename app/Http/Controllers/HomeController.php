<?php namespace App\Http\Controllers;

use App\Models\Tiket;
use App\User;
use Auth;
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
	public function Index()
	{
		// Информация о пользователе
		$UserInfoLaravel = User::find(Auth::user()->id);


		//Тикеты 
		$Tikets = Tiket::whereRaw('idu = ? and idt is null', [Auth::user()->id] )->orderBy('id', 'desc')->simplePaginate(3);


		return view('home', ['Tikets' => $Tikets, 'UserInfoLaravel' => $UserInfoLaravel]);
	}








}
