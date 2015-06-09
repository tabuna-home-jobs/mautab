<?php namespace Mautab\Http\Requests;

use Sentry;

class ChangeBDRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return Sentry::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'bd' => 'required|max:255',
			'user_bd' => 'required|max:255',
			'password_bd' => 'required|min:8',
		];
	}

}
