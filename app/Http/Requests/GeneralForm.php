<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralForm extends FormRequest
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
            'com_name' => 'required',
            'header_title' => 'required',
            'com_addres' => 'required',
            'com_phone' => 'required',
            'copyright' => 'required',
            'com_logo' => 'required',
            'com_details' => 'required',
            'linkedin' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instragram' => 'required',
            'youtube' => 'required',
        ];
    }
}
