<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'nickname' => 'required|max:255|unique:users',
			'name' => 'required|max:255',
			'lastname' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{

		$Vesta = new Vesta();
		$Vesta->regUser($data['nickname'],$data['password'],$data['email'],'default',$data['name'],$data['lastname']);


		return User::create([
			'nickname' => $data['nickname'],
			'name' => $data['name'],
			'lastname' => $data['lastname'],
			'email' => $data['email'],
			'package' => 'default',
			'password' => bcrypt($data['password']),
		]);
	}

}
