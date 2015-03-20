<?php namespace App\Http\Controllers;

use Auth;
use App\Models\Tiket;
use Request;
use Session;
use Redirect;

class TiketsController extends Controller {

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

        $Tikets = Tiket::whereRaw('idu = ? and idt is null', [Auth::user()->id] )->orderBy('id', 'desc')->simplePaginate(15);
		return view('tikets/index',['Tikets' => $Tikets]);
	}

	//Новая заявка
	public function postAdd()
	{
			//Получение всех пришедших данных
			$input = Request::all();

			$tikets = new Tiket;

			//Заполнение модели
			$tikets->idu = Auth::user()->id;
			$tikets->title = $input['title'];
			$tikets->message = $input['message'];
			$tikets->complete = 0;
			$tikets->save();

			//Флеш сообщение
			Session::flash('good', 'Вы успешно создали тикет!');
			return Redirect::to('/tikets');

	}

	//Ответ
	public function postReplay()
	{
		return view('tikets/add');
	}



}
