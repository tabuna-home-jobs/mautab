<?php namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use Sentry;

class UserRequest extends Request
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
			'id' => 'integer',
            'email' => 'sometimes|required|email',
            'first_name' => 'sometimes|required|max:255',
            'last_name' => 'sometimes|required|max:255',
            'groups' => 'array',
            'permissions' => 'array'
		];
	}

}
