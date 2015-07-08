<?php namespace Mautab\Http\Controllers\Hosting;

use Auth;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\TiketRequest;
use Mautab\Models\Tiket;
use Mautab\Models\User;
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


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $Tikets = User::find(Auth::User()->id)->tiket()->where('tikets_id', 0)->orderBy('id', 'desc')->simplePaginate(15);

		return view('user/tikets/index', ['Tikets' => $Tikets]);
	}

	//Новая заявка
	public function store(TiketRequest $request)
	{
		$tiket = new Tiket([
			'title'    => $request->title,
			'message'  => $request->message,
			'complete' => 0,
		]);
        User::find(Auth::User()->id)->tiket()->save($tiket);
		Session::flash('good', 'Вы успешно создали тикет!');
		return redirect()->back();
	}

	public function show($id)
	{
        $Tiket = User::find(Auth::User()->id)->tiket()->find($id);
        $subTiket = User::find(Auth::User()->id)->tiket()->find($id)->subtiket($id)->simplePaginate(15);

		return view('user/tikets/viewer', ['Tiket' => $Tiket, 'subTiket' => $subTiket]);
	}

	//Ответ
	public function update(TiketRequest $request)
	{

		//Заполнение модели

        $Tiket = User::find(Auth::User()->id)->tiket()->find($request->id)->subtiket($request->id);
		$Tiket->save(new Tiket([
			'message' => $request->message,
		]));
		Session::flash('good', 'Вы успешно добавили ответ.');
		return redirect()->back();
	}



}