<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Requests\Auth\AuthRequestReg;
use Sentry;
use Session;

class AuthController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getLogin()
	{
		return view('auth/login');
	}


	public function postLogin(AuthRequest $request)
	{
		$credentials = array(
			'email'    => $request->email,
			'password' => $request->password,
		);
		Sentry::authenticateAndRemember($credentials);
		return redirect('/home');

	}



	public function getRegister()
	{
		return view('auth/register');
	}


	public function postRegister(AuthRequestReg $request)
	{
		// Create the user
		$user = Sentry::createUser(array(
			'nickname'   => $request->nickname,
			'first_name' => $request->name,
			'last_name'  => $request->lastname,
			'email'      => $request->email,
			'package'    => $request->package,
			'password'   => $request->password,
			'activated'  => TRUE,
		));


		$def_package = array(0 => 'starter',
		                     1 => 'professional',
		                     2 => 'enterprice');


		foreach ($def_package as $key => $val) {
			if ($key == $request->package) {
				$data['package'] = $val;
			}
		}

		Vesta::regUser($request->nickname, $request->password, $request->email, 'default', $request->name, $request->lastname);


		$adminGroup = Sentry::findGroupByName('User');
		$user->addGroup($adminGroup);
		Sentry::loginAndRemember($user);
		return redirect()->route('home.index');
	}


	public function getLogout()
	{
		Sentry::logout();
		Session::flush();
		return redirect('/');
	}



}
