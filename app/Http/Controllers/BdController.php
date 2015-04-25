<?php
namespace App\Http\Controllers;

use App\Http\Requests\ChangeBDRequest;
use Auth;
use Session;
use Vesta;
use App\Http\Requests\AddBDRequest;


class BdController extends Controller{

	public function __construct(){

		$this->middleware('auth');

	}

	public function Index(){
		return view('bd/index',['BdList' => Vesta::listBD()]);
	}

	public function show($name){

		return view('bd/editList',['BdList' =>  Vesta::listOnlyBD($name)]);
	}


	public function update(ChangeBDRequest $request){
        //Обрезаем префикс
        $request->user_bd =  preg_replace("/^". Auth::user()->nickname ."_/", "", $request->user_bd);
        Vesta::changeDbUser($request->bd, $request->user_bd);
        Vesta::changeDbPassword($request->bd, $request->password_bd);
        Session::flash('good', 'Вы успешно изменили базу данных.');
        return redirect()->route('bd.index');
	}


    public  function  store(AddBDRequest $request)
    {
	    $request->v_dbuser =  preg_replace("/^". Auth::user()->nickname ."_/", "", $request->v_dbuser);
	    $request->v_database =  preg_replace("/^". Auth::user()->nickname ."_/", "", $request->v_database);

        dd(Vesta::addDateBase($request->v_database,
                            $request->v_dbuser,
                            $request->password_bd,
                            'mysql', // По умолчанию MySQL
                            $request->v_charset));

        Session::flash('good', 'Вы успешно добавили базу данных.');
        return redirect()->route('bd.index');
    }

    public  function  delete(RemoveBDRequest $request)
    {
        Vesta::addDateBasedeleteDateBase($request->v_database);
        Session::flash('good', 'Вы успешно удалили базу данных.');
        return redirect()->route('bd.index');
    }
	public function create(){

		return view('bd/create');

	}





}
