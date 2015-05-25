<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangeFtpRequest;
use App\Http\Requests\RemoveFtpRequest;
use Request;
use Sentry;
use Session;
use Vesta;

class FtpController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		dd('dsdfsdfsdff');

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		dd('dasdasdasdf');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{dd('dfasdasdas');

		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($name)
	{

		return view('ftp/index',['ftplist' => Vesta::listEditWebDomain($name)]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
dd('df');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ChangeFtpRequest $request){

		if(!is_array($request->v_ftp_user)){
			Session::flash('danger', 'Ничего не изменено.');
			return redirect()->route('web.index');
		}
		
		//Изменение FTP
			foreach ($request->v_ftp_user as $i => $v_ftp_user_data) {

				if (empty($v_ftp_user_data['v_ftp_user']) && empty($v_ftp_user_data['v_ftp_password'])) {
					continue;
				}
				$v_ftp_user_data['v_ftp_user'] = preg_replace("/^" . Sentry::getUser()->nickname . "_/i", "", $v_ftp_user_data['v_ftp_user']);

				if ($v_ftp_user_data['is_new'] == 1) {

					$v_ftp_username      = $v_ftp_user_data['v_ftp_user'];

					$v_ftp_password = $v_ftp_user_data['v_ftp_password'];

					//Проверяем есть ли первым символом слеш
					$v_ftp_path = trim($v_ftp_user_data['v_ftp_path']);
					$pos = strpos($v_ftp_path, '/');
					($pos === 0) ? $v_ftp_p = $v_ftp_path : $v_ftp_p = '';


					//Добавляем данные для фтп
					Vesta::addFtpDomain($request->domain, $v_ftp_username, $v_ftp_password, $v_ftp_p);

					continue;
				}

				if ($v_ftp_user_data['is_old'] == 1){

					// Изменение FTP акаунта
					$v_ftp_username      = $v_ftp_user_data['v_ftp_user'];
					$v_ftp_password = $v_ftp_user_data['v_ftp_password'];

					//Проверяем есть ли первым символом слеш
					$v_ftp_path = trim($v_ftp_user_data['v_ftp_path']);
					$pos = strpos($v_ftp_path, '/');
					($pos === 0) ? $v_ftp_p = $v_ftp_path : $v_ftp_p = '';


					$v_ftp_username = Sentry::getUser()->nickname . "_" . $v_ftp_username;


					Vesta::changeWebDomain($request->domain, $v_ftp_username, $v_ftp_p);

if ($v_ftp_user_data['v_ftp_password'] != "" && $v_ftp_user_data['v_ftp_password'] != "********" && !empty($v_ftp_user_data['v_ftp_password'])) {

						Vesta::changeFtpPassword($request->domain, $v_ftp_username, $v_ftp_user_data['v_ftp_password']);

					}

				}
			}


		Session::flash('good', 'Вы успешно добавили/обновили FTP.');

		return redirect()->route('web.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(RemoveFtpRequest $request){

		Vesta::deleteWebDomain($request->domain, $request->ftpUser);

	}

}
