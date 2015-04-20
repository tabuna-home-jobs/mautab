<?php
namespace App\Http\Controllers;

use App\Http\Requests\Request;
use Auth;
use Vesta;
use App\Http\Requests\ChangeBDRequest;

class BdController extends Controller{

	public function __construct(){

		$this->middleware('auth');

	}

	public function getIndex(){
		$name = Auth::user()->nickname;
		$BdList = Vesta::listBD($name);

		return view('bd/index',['BdList' => $BdList]);
	}

	public function getCrud($name){

		$BdList = Vesta::listBD($name);
		return view('bd/editList',['BdList' => $BdList]);
	}


	public function postIndex(ChangeBDRequest $request){

		Vesta::changeDb($request->v_dbuser, $request->v_database);

	}



}
