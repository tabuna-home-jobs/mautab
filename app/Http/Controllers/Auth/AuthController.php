<?php namespace Mautab\Http\Controllers\Auth;

use Config;
use Mautab\Events\SendMailAction;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\Auth\ActionRequest;
use Mautab\Http\Requests\Auth\AuthRequest;
use Mautab\Http\Requests\Auth\AuthRequestReg;
use Mautab\Http\Requests\Auth\RepeatRequest;
use Sentry;
use Session;
use Vesta;

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

		return redirect('/hosting/home');

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
			'server' => (string)Config::get('vesta.primary'),
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


		$activationCode = $user->getActivationCode();
		event(new SendMailAction($activationCode, $request));
		return redirect('/auth/action');
	}


	public function getLogout()
	{
		Sentry::logout();
		Session::flush();
		return redirect('/');
	}


	public function getAction($email = NULL, $activationCode = NULL)
	{


		if (is_null($email) || is_null($activationCode))
			return view('auth/action', ['email' => $email]);
		else {
			$user = Sentry::findUserByLogin($email);
			if ($user->attemptActivation($activationCode)) {
				$adminGroup = Sentry::findGroupByName('User');
				$user->addGroup($adminGroup);
				Sentry::loginAndRemember($user);

				return redirect()->route('hosting.home.index');
			} else {
				return redirect()->back()->withErrors(array('Ключ не подходит к email'));
			}
		}
	}

	public function  postAction(ActionRequest $request)
	{

		$user = Sentry::findUserByLogin($request->email);
		if ($user->attemptActivation($request->key)) {
			$adminGroup = Sentry::findGroupByName('User');
			$user->addGroup($adminGroup);
			Sentry::loginAndRemember($user);

			return redirect()->route('hosting.home.index');
		} else {
			return redirect()->back()->withErrors(array('Ключ не подходит к email'));
		}
	}


	public function getRepeat()
	{
		return view('auth/repeat');
	}

	public function  postRepeat(RepeatRequest $request)
	{
		$user           = Sentry::findUserByLogin($request->email);
		$activationCode = $user->getActivationCode();
		event(new SendMailAction($activationCode, $request));
		return redirect('/auth/action');
	}

}
