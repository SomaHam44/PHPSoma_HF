<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeWorkRequest extends FormRequest
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
            'assignment_title' => 'required|min:2',
            'url' => 'required|min:3',
            'feedback' => 'required|min:1|max:100',
            'point' => 'required|numeric|min:1|max:5',
        ];

            //

    }
}
