<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewArrival extends FormRequest
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
            'parent'=> 'required',
            'category'=> 'required',
            'sub_cate'=> 'required',
            'att_title'=> 'required',
            'product_name'=> 'required',
            'slug'=> 'required',
            'regular_price'=> 'required',
            'old_price'=> 'required',
            'discount_percent'=> 'required',
            'product_quantity'=> 'required',
            'pro_detail'=> 'required',
            'pro_image'=> 'required',
            'color'=> 'required',
            'size'=> 'required',
        ];
    }
}
