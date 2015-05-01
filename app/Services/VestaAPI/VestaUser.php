<?php namespace App\Services\VestaAPI;

use Auth;
use Cache;

trait VestaUser
{

	// Регистрация пользователя
	public function regUser($username, $password, $email, $package, $fist_name, $last_name)
	{

		//Добовление пользователя в систему
		$Vesta = $this->sendQuery('v-add-user', $username, $password, $email, $package, $fist_name, $last_name);
		if ($Vesta != 0)
			return $Vesta;

		//Локализация панели для пользователя
		$Vesta = $this->sendQuery('v-change-user-language', $username, 'ru');
		if ($Vesta != 0)
			return $Vesta;

		//Блокировка пользователя до момента оплаты
		$Vesta = $this->sendQuery('v-suspend-user', $username, 'no');
		if ($Vesta != 0)
			return $Vesta;
	}

	public function  changeUserPassword($password)
	{
		return $this->sendQuery('v-change-user-password', Auth::user()->nickname, $password);
	}

	public function  changeUserEmail($email)
	{
		return $this->sendQuery('v-change-user-contact', Auth::user()->nickname, $email);
	}


	//List User Account
	public function listUserAccount()
	{
		return Cache::remember('listUserAccount-' . Auth::user()->nickname, 10, function () {
			$answer = $this->sendQuery('v-list-user', Auth::user()->nickname, 'json');
			$data   = json_decode($answer, TRUE);

			return $data;
		});
	}

	//List User Backups
	public function listUserBackups()
	{
		$answer = $this->sendQuery('v-list-user-backups', Auth::user()->nickname, 'json');
		$data   = json_decode($answer, TRUE);

		return $data;
	}


}
