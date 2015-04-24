<?php
namespace App\Http\Controllers;

use App\Http\Requests\ChangeBDRequest;
use Auth;
use Session;
use Vesta;


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
        Session::flash('good', 'Вы успешно изменили запись.');
        return redirect()->route('bd.index');

	}



}
