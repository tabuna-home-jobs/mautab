<?php namespace App\Http\Requests;

use Sentry;

class AddDNSRequest extends Request
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
			'v_domain' => 'required|min:3|max:255',
			'v_ip'     => 'required|min:7|max:255',
			'v_exp'    => 'required|min:8|max:255|date:YYYY-MM-DD',
			'v_ttl'    => 'required|min:3|max:255',
			'v_ns1'    => 'required|min:3|max:255',
			'v_ns2'    => 'min:3|max:255',
		];
	}

}
