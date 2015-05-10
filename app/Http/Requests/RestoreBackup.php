<?php namespace App\Http\Requests;

use Sentry;

class RestoreBackup extends Request
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
			'backup' => 'required',
			'object' => 'required',
			'type'   => 'in:web,dns,mail,db,cron,udir',
		];
	}

}
