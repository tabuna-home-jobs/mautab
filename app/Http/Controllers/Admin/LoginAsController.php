<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Session;

class LoginAsController extends Controller
{

	public function  getLoginAs($name)
	{
		Session::put('LoginAs', $name);

		return redirect()->route('home.index');
	}

	public function getExit()
	{
		Session::forget('LoginAs');

		return redirect()->route('home.index');
	}

}
