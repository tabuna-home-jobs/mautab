<?php namespace App\Http\Requests;

use Sentry;

class CronRequest extends Request
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
			'v_min'   => 'required',
			'v_hour'  => 'required',
			'v_day'   => 'required',
			'v_month' => 'required',
			'v_wday'  => 'required',
			'v_cmd'   => 'required',
		];
	}

}
