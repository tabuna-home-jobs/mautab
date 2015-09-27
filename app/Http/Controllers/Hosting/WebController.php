<?php namespace Mautab\Http\Controllers\Hosting;

use Auth;
use Config;
use Flash;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\AddWebRequest;
use Mautab\Http\Requests\ChangeWebRequest;
use Mautab\Http\Requests\RemoveWebRequest;
use Request;
use Vesta;


class WebController extends Controller
{

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
    public function index()
    {
        return view('user/web/index', [
            "UserDomain" => Vesta::listWebDomain()
        ]);
    }

    //Добавление веб домена
    public function store(AddWebRequest $request)
    {


        $checkDomain = preg_match('/^([0-9a-z]([0-9a-z\-])*[0-9a-z]\.)+[0-9a-z\-]{1,8}$/i', $request->v_domain);


        if ($checkDomain !== 0) {

            $UserIP = (string)Config::get('vesta.server')[Auth::User()->server]['ip'];

            //Обрезка у домена www
            $request->v_domain = preg_replace('/^[wW]+\./', "", $request->v_domain);

            //Добавление нового домена
            Vesta::addWebDomain($request->v_domain, $UserIP);

            //Добавление поддержки днс
            //if ($request->v_dns == 'on') {
            // !! Поддержка днс пускай будет по умолчанию  !!
            Vesta::addDns($request->v_domain, $UserIP);
            //}

            //Убираем почту до лучших времён
            //Добавление поддержки мыла
            //if ($request->v_mail == 'on') {
            //	Vesta::addMail($request->v_domain);
            //}

            //Добавление алиасов
            if (strlen($request->v_aliases) >= 1) {
                //Распил алиасов
                $valiases = preg_replace("/\n/", " ", $request->v_aliases);
                $valiases = preg_replace("/,/", " ", $valiases);
                $valiases = preg_replace('/\s+/', ' ', $valiases);
                $valiases = trim($valiases);
                $aliases = explode(" ", $valiases);


                //Запись алиасов
                foreach ($aliases as $alias) {

                    if ($alias == 'www.' . $request->v_domain) {
                        $www_alias = 'yes';
                    } else {

                        Vesta::addWebDomainAlias($request->v_domain, $alias);
                        Vesta::addDnsAlias($request->v_domain, $alias);
                    }
                }
            } else {

                $www_alias = 'yes';

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

            Flash::success('Вы успешно добавили Домен.');
            return redirect()->route('web.index');
        } else {
            Flash::error('Введите валидный домен');
            return redirect()->route('web.index');
        }
    }

    public function getDomain()
    {
        return view('user/web/domain');
    }

    public function postDomain()
    {
        $v_domain = Request::input('v_domain');
        $test = Vesta::addWebDomain($v_domain);
        Request::url('/web/domain');
    }

    public function destroy(RemoveWebRequest $request)
    {

        //Получаем список всех алиасов
        $listWebDom = Vesta::listEditWebDomain($request->v_domain);
        $listAliases = $listWebDom[$request->v_domain]['ALIAS'];
        $aliArr = explode(',', $listAliases);
        Vesta::deleteDomain($request->v_domain);

        //Удаляем его алиасы
        for ($i = 0; $i < count($aliArr); $i++) {
            Vesta::deleteDNDDomain($aliArr[$i]);
        }

        Flash::success('Вы успешно удалили веб домен.');
        return redirect()->route('web.index');

    }

    public function show($name)
    {
        return view('user/web/editList', [
            'webList' => Vesta::listEditWebDomain($name)
        ]);
    }

    public function update(ChangeWebRequest $request)
    {
        //Изменение IP
        Vesta::changeWebDomainIp($request->v_domain, $request->v_ip);
        Flash::success('Обновление прошло успешно.');
        return redirect()->route('web.index');
    }

}
