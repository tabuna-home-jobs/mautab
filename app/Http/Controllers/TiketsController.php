<?php namespace App\Http\Controllers;

use App\Http\Requests\TiketRequest;
use App\Models\Tiket;
use App\Models\User;
use Auth;
use Session;

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
	public function index()
	{
		$Tikets = User::find(Auth::user()->id)->tiket()->where('tikets_id')->orderBy('id', 'desc')->simplePaginate(15);
		return view('/tikets/index', ['Tikets' => $Tikets]);
	}

	//Новая заявка
	public function store(TiketRequest $request)
	{


			$tikets = new Tiket;

			//Заполнение модели
			$tikets->idu = Auth::user()->id;
		$tikets->title = $request->title;
		$tikets->message = $request->message;
			$tikets->complete = 0;
			$tikets->save();

			//Флеш сообщение
			Session::flash('good', 'Вы успешно создали тикет!');

		return redirect()->back();

	}

	public function show($id)
	{
		$Tiket    = User::find(Auth::user()->id)->tiket()->find($id)->firstOrFail();
		$subTiket = User::find(Auth::user()->id)->tiket()->find($id)->subtiket()->simplePaginate(15);
		return view('tikets/viewer',['Tiket' => $Tiket, 'subTiket' => $subTiket]);
	}

	//Ответ
	public function edit()
	{
		$input = Request::all();

		$tikets = new Tiket;

		//Заполнение модели
		$tikets->idu = Auth::user()->id;
		$tikets->idt = $input['id'];
		$tikets->message = $input['reply'];
		$tikets->save();

		Session::flash('good', 'Вы успешно добавили ответ.');

		return redirect()->back();
	}



}
