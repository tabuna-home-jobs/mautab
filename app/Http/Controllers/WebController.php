<?php namespace App\Http\Controllers;

use App\Http\Requests\AddWebRequest;
use App\Http\Requests\ChangeWebRequest;
use App\Http\Requests\RemoveWebRequest;
use Request;
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
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function Index()
	{
		return view('web/index',[ "UserDomain" => Vesta::listWebDomain() ]);
	}

	public function store(AddWebRequest $request)
	{


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

	public function update(ChangeWebRequest $request)
	{

		Vesta::changeWebDomainIp($request->v_domain, $request->v_ip);

		Session::flash('good', 'Ты красавчег! обновил всё каг надо');

		return redirect()->route('web.index');
	}

}
