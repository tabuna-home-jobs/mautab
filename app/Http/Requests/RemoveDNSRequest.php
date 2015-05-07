<?php namespace App\Http\Requests;

use Auth;

class RemoveDNSRequest extends Request
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
			'v_domain' => 'required|min:3|max:255',
		];
	}

}
