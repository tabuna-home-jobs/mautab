<?php

namespace Mautab\Http\Requests\SEO;

use Mautab\Http\Requests\Request;

class WhoisRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'domain' => 'required'
        ];
    }
}
