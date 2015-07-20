<?php namespace Mautab\Http\Controllers\Hosting;

use Auth;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\AddBDRequest;
use Mautab\Http\Requests\ChangeBDRequest;
use Mautab\Http\Requests\RemoveBDRequest;
use Session;
use Vesta;


class BdController extends Controller{


	public function Index(){
		return view('user/bd/index', ['BdList' => Vesta::listBD()]);
	}

	public function show($name){
		return view('user/bd/editList', ['BdList' => Vesta::listOnlyBD($name)]);
	}

	public function update(ChangeBDRequest $request){

        //Обрезаем префикс
        $request->user_bd = preg_replace("/^" . Auth::User()->nickname . "_/", "", $request->user_bd);
        Vesta::changeDbUser($request->bd, $request->user_bd);
        Vesta::changeDbPassword($request->bd, $request->password_bd);
        Session::flash('good', 'Вы успешно изменили базу данных.');

        return redirect()->route('bd.index');
	}

	public function store(AddBDRequest $request)
    {
        $request->v_dbuser = preg_replace("/^" . Auth::User()->nickname . "_/", "", $request->v_dbuser);
        $request->v_database = preg_replace("/^" . Auth::User()->nickname . "_/", "", $request->v_database);

	    Vesta::addDateBase($request->v_database,
                            $request->v_dbuser,
                            $request->password_bd,
                            'mysql', // По умолчанию MySQL
                            $request->v_charset);

        Session::flash('good', 'Вы успешно добавили базу данных.');

        return redirect()->route('bd.index');
    }

    public function destroy(RemoveBDRequest $request)
    {
        Vesta::deleteDateBase($request->v_database);
        Session::flash('good', 'Вы успешно удалили базу данных.');

        return redirect()->route('bd.index');
    }
	public function create(){

		return view('user/bd/create');

	}





}
