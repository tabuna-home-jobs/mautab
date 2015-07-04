<?php

	namespace Mautab\Http\Requests\Auth;

	use Mautab\Http\Requests\Request;
    use Sentry;

    class AuthRegHostingRequest extends Request
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
				'nickname' => 'required|max:255|unique:users',
				'package'  => 'required|integer|between:0,2'
			];
		}
	}
