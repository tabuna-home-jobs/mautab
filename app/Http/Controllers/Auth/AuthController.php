<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ActionRequest;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Requests\Auth\AuthRequestReg;
use Mail;
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
		Mail::send('mail/activate', ['activationCode' => $activationCode, 'email' => $request->email], function ($message) use ($request) {
			$message->from('us@example.com', 'Laravel');
			$message->to($request->email)->cc($request->email);
		});


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

				return redirect()->route('home.index');
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

			return redirect()->route('home.index');
		} else {
			return redirect()->back()->withErrors(array('Ключ не подходит к email'));
		}
	}


	public function anyPassword($email = NULL)
	{
		if (is_null($email))
			return view('auth/password');
		else {
			$user      = Sentry::findUserByLogin($email);
			$resetCode = $user->getResetPasswordCode();

			Mail::send('mail/password', ['resetCode' => $resetCode, 'email' => $email], function ($message) use ($email) {
				$message->from('us@example.com', 'Laravel');
				$message->to($email)->cc($email);
			});


		}
	}


}
