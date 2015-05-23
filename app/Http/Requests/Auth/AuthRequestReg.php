<?php namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;
use Sentry;

class AuthRequestReg extends Request
{

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return !Sentry::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nickname' => 'required|max:255|unique:users',
			'name'     => 'required|max:255',
			'lastname' => 'required|max:255',
			'email'    => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
			'package'  => 'required|integer|between:0,2'
		];
	}

}
