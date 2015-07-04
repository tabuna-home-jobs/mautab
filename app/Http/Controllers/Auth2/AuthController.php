<?php //namespace Mautab\Http\Controllers\Auth2;

use Mautab\Events\SendMailAction;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\Auth\ActionRequest;
use Mautab\Http\Requests\Auth\AuthRegHostingRequest;
use Mautab\Http\Requests\Auth\AuthRequest;
use Mautab\Http\Requests\Auth\AuthRequestReg;
use Mautab\Http\Requests\Auth\RepeatRequest;

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

	public function getHosting()
	{
		return view('auth/registerHosting');
	}

	public function putHosting(AuthRegHostingRequest $request)
	{
		$user           = Sentry::getUser();
		$user->nickname = $request->nickname;
		$user->package  = $request->package;
		$user->server   = (string)Config::get('vesta.primary');
		$user->addGroup(Sentry::findGroupByName('Hosting'));
		$user->save();

		$def_package = array(0 => 'starter',
		                     1 => 'professional',
		                     2 => 'enterprice');


		foreach ($def_package as $key => $val) {
			if ($key == $request->package) {
				$data['package'] = $val;
			}
		}

		Vesta::regUser($user->nickname, $user->password, $user->email, 'default', $user->name, $user->lastname);

		return redirect()->route('hosting.home.index');

	}


	public function postRegister(AuthRequestReg $request)
	{
		// Create the user
		$user = Sentry::createUser(array(
			'first_name' => $request->name,
			'last_name'  => $request->lastname,
			'email'      => $request->email,
			'password'   => $request->password,
		));


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

				return redirect('/');
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
