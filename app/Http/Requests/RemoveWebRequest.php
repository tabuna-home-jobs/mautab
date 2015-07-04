<?php namespace Mautab\Http\Requests;

use Auth;

class RemoveWebRequest extends Request
{

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
			"v_domain" => 'max:255'
		];
	}

}
