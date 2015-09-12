<?php namespace Mautab\Http\Requests\Admin;

use Auth;
use Mautab\Http\Requests\Request;

class PagesRequest extends Request
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
            'id' => 'sometimes|required|integer',
            'title' => 'sometimes|required|max:255',
            'name' => 'sometimes|required|max:255',
            'cont' => 'sometimes|required',
            'tag' => 'max:255',
            'descript' => 'max:255',
        ];
    }

}
