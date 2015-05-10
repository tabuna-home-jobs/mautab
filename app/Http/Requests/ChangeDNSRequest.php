<?php namespace App\Http\Requests;

use Sentry;

class ChangeDNSRequest extends Request
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
			'exp' => 'required|min:8|max:255|date:YYYY-MM-DD',
			'dns' => 'required|min:3|max:255',
			'soa' => 'required|min:3|max:255',
			'ip'  => 'required|min:7|max:255',
			'ttl' => 'required|min:3|max:255'
		];
	}

}
