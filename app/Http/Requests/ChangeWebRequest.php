<?php namespace App\Http\Requests;

use Auth;
use Illuminate\Support\Facades\Request;

class ChangeWebRequest extends Request
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
		dd(Request::all());

		return [

		];
	}

}
