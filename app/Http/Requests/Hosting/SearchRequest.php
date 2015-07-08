<?php

namespace Mautab\Http\Requests\Hosting;

use Mautab\Http\Requests\Request;
use Auth;

class SearchRequest extends Request
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
            'query' => 'min:3|required',
        ];
    }
}
