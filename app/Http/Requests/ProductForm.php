<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductForm extends FormRequest
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
            'category'=> 'required',
            'sub_cate'=> 'required',
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
