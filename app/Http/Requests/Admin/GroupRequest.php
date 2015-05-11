<?php namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use Sentry;

class GroupRequest extends Request
{

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
			'id'   => 'sometimes|integer|required',
			'namenew' => 'sometimes|required|max:255',
			'name' => 'sometimes|required|max:255|unique:groups',
			'permissions' => 'array',
		];
	}

}
