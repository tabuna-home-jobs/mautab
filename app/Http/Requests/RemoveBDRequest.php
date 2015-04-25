<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RemoveBDRequest extends Request {

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
		];
	}

}
