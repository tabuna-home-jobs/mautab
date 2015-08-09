<?php

namespace Mautab\Http\Requests\Hosting;

use Auth;
use Mautab\Http\Requests\Request;

class UpdateFileManager extends Request
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
            'name' => 'required',
            'permission' => 'integer|required'
        ];
    }
}
