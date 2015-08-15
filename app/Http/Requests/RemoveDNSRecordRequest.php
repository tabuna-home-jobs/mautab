<?php namespace Mautab\Http\Requests;

use Auth;

class RemoveDNSRecordRequest extends Request
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
            'v_domain' => 'required|max:255',
            'v_record_id' => 'required|integer'
        ];
    }

}
