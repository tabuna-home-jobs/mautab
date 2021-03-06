<?php namespace Mautab\Http\Requests;

use Auth;

class ChangeUserRequest extends Request
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
            'email' => 'sometimes|required|max:255|email',
            'phone' => 'sometimes|required|max:255',
            'password' => 'sometimes|confirmed|required|max:255|min:8',
            'email_notification' => 'sometimes|required|boolean',
            'phone_notification' => 'sometimes|required|boolean',
            'lang' => 'in:ru,en',
        ];
    }

}
