<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterParameterRequest extends FormRequest
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
            'start_dt'  => 'required|date',
            'end_dt'    => 'required|date',
            'type'      => 'required|in:t,p,v',
        ];
    }
}
