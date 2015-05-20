<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddWebRequest;
use App\Http\Requests\ChangeWebRequest;
use App\Http\Requests\RemoveWebRequest;
use Mail;
use Request;
use Sentry;
use Session;
use Vesta;

class WebController extends Controller {

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
	public function Index()
	{
		return view('web/index',[ "UserDomain" => Vesta::listWebDomain() ]);
	}

	//Добавление веб домена
	public function store(AddWebRequest $request)
	{

		//Добавление нового домена
		Vesta::addWebDomain($request->v_domain, $request->v_ip);

		//Добавление поддержки днс
		if ($request->v_dns == 'on') {
			Vesta::addDns($request->v_domain, $request->v_ip);
		}
		//Добавление поддержки мыла
		if ($request->v_mail == 'on') {
			Vesta::addMail($request->v_domain);
		}

		//Добавление алиасов
		if (strlen($request->v_aliases) >= 1) {
			//Распил алиасов
			$valiases = preg_replace("/\n/", " ", $request->v_aliases);
			$valiases = preg_replace("/,/", " ", $valiases);
			$valiases = preg_replace('/\s+/', ' ', $valiases);
			$valiases = trim($valiases);
			$aliases  = explode(" ", $valiases);


			//Запись алиасов
			foreach ($aliases as $alias) {

				if ($alias == 'www.' . $request->v_domain) {
					$www_alias = 'yes';
				} else {

					Vesta::addWebDomainAlias($request->v_domain, $alias);

					if ($request->v_dns == 'on') {
						Vesta::addDnsAlias($request->v_domain, $alias);
					}
				}
			}
		}

		if (empty($www_alias)) {
			$alias = preg_replace("/^www./i", "", $request->v_domain);
			$alias = 'www.' . $alias;
			Vesta::deleteWebDomainAlias($request->v_domain, $alias);
		}

		if ($request->v_proxy == 'on') {
			$ext = str_replace(' ', '', $request->v_proxy_ext);
			Vesta::addDomainProxy($request->v_domain, $ext);
		}

		//Добавление ФТП
		if ($request->v_ftp == 'on') {

			foreach ($request->v_ftp_user as $i => $v_ftp_user_data) {

				if ($v_ftp_user_data['is_new'] == 1) {

					$v_ftp_user_data['v_ftp_user'] = preg_replace("/^" . Sentry::getUser()->nickname . "_/i", "", $v_ftp_user_data['v_ftp_user']);

					$v_ftp_username                = $v_ftp_user_data['v_ftp_user'];

					$v_ftp_password                = $v_ftp_user_data['v_ftp_password'];
					$domain_added                  = 1;


					if ($domain_added) {
						//Проверяем есть ли первым символом слеш
						$v_ftp_path = trim($v_ftp_user_data['v_ftp_path']);
						$pos = strpos($v_ftp_path, '/');
						($pos === 0) ? $v_ftp_p = $v_ftp_path : $v_ftp_p = '';

						//Добавляем данные для фтп
						Vesta::addFtpDomain($request->v_domain, $v_ftp_username, $v_ftp_password, $v_ftp_p);

						if ((!empty($v_ftp_user_data['v_ftp_email']))) {
							$mail = $v_ftp_user_data['v_ftp_email'];

							Mail::raw('Новый фтп', function ($message) use ($mail) {

								$message->from('no-reply@cloudme.ru', 'Ларыч');
								$message->to($mail)->cc($mail);
							});
						}
					}
					continue;
				}
			}
		}



		Session::flash('good', 'Вы успешно добавили Домен.');

		return redirect()->route('web.index');
	}

    public  function getDomain()
    {
        return view('web/domain');
    }

    public  function postDomain()
    {
        $v_domain = Request::input('v_domain');
        $test = Vesta::addWebDomain($v_domain);
        dd($test);
        Request::url('/web/domain');
    }

	public function destroy(RemoveWebRequest $request)
	{

		Vesta::deleteDomain($request->v_domain);
		Session::flash('good', 'Вы успешно удалили веб домен.');

		return redirect()->route('web.index');

	}

	public function show($name)
	{
		return view('web/editList', ['webList' => Vesta::listEditWebDomain($name)]);
	}

	public function showFTP(){

	}

	public function update(ChangeWebRequest $request)
	{
		//Изменение IP
		Vesta::changeWebDomainIp($request->v_domain, $request->v_ip);

		//Изменение FTP
		if (!empty($request->v_ftp_user)) {

			$v_ftp_users_updated = array();

			foreach ($request->v_ftp_user as $i => $v_ftp_user_data) {
				if (empty($v_ftp_user_data['v_ftp_user']) && empty($v_ftp_user_data['v_ftp_password'])) {
					continue;
				}
				$v_ftp_user_data['v_ftp_user'] = preg_replace("/^" . Sentry::getUser()->nickname . "_/i", "", $v_ftp_user_data['v_ftp_user']);

				if ($v_ftp_user_data['is_new'] == 1 && !empty($request->v_ftp)) {

					$v_ftp_username      = $v_ftp_user_data['v_ftp_user'];

					$v_ftp_password = $v_ftp_user_data['v_ftp_password'];

					//Проверяем есть ли первым символом слеш
					$v_ftp_path = trim($v_ftp_user_data['v_ftp_path']);
					$pos = strpos($v_ftp_path, '/');
					($pos === 0) ? $v_ftp_p = $v_ftp_path : $v_ftp_p = '';


					//Добавляем данные для фтп
					Vesta::addFtpDomain($request->v_domain, $v_ftp_username, $v_ftp_password, $v_ftp_p);

					continue;
				}


				//Какоето удаление домена, пока не приходит в массиве со стороны клиента
				//Но теоретически сделано
				if ($v_ftp_user_data['delete'] == 1) {
					$v_ftp_username = Sentry::getUser()->nickname . '_' . $v_ftp_user_data['v_ftp_user'];

					Vesta::deleteWebDomain($request->v_domain, $v_ftp_username);
					continue;
				}

				if (!empty($request->v_ftp)){

					// Изменение FTP акаунта


					$v_ftp_username      = $v_ftp_user_data['v_ftp_user'];
					$v_ftp_password = $v_ftp_user_data['v_ftp_password'];

					//Проверяем есть ли первым символом слеш
					$v_ftp_path = trim($v_ftp_user_data['v_ftp_path']);
					$pos = strpos($v_ftp_path, '/');
					($pos === 0) ? $v_ftp_p = $v_ftp_path : $v_ftp_p = '';


					Vesta::changeWebDomain($request->v_domain, $v_ftp_username, $v_ftp_p);

					if ($v_ftp_user_data['v_ftp_password'] != "" && $v_ftp_user_data['v_ftp_password'] != "" && !empty($v_ftp_user_data['v_ftp_password'])) {

					Vesta::changeFtpPassword($request->v_domain, $v_ftp_username, $v_ftp_user_data['v_ftp_password']);

					}

				}
			}
		}

		Session::flash('good', 'Обновление прошло успешно');

		return redirect()->route('web.index');
	}

}
