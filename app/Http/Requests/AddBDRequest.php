<?php namespace Mautab\Http\Requests;

use Auth;

class AddBDRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
        return Auth::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'v_database' => 'required|max:255',
            'v_dbuser' => 'required|max:255',
            'password_bd' => 'required|min:8',
            'v_type' => 'max:255',
            'v_charset' => 'required',
		];
	}

}
