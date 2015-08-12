<?php namespace Mautab\Http\Requests\Auth;

use Mautab\Http\Requests\Request;
use Sentry;

class ActionRequest extends Request
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
			'email' => 'email|required',
			'key'   => 'max:255|required',
		];
	}

}
