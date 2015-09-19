<?php

namespace Mautab\Http\Requests\Admin;

use Auth;
use Mautab\Http\Requests\Request;

class NewsRequest extends Request
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
            'title' => 'required|max:255',
            'keywords' => 'required|max:255',
            'descript' => 'required|max:255',
            'content' => 'required',
        ];
    }
}
