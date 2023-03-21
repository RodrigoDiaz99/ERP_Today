<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
            'name' => [
                'required',
                'min:2',
                'max:255',
                Rule::unique('products', 'productName')->ignore($this->id)
            ],
            'type' => [
                'required',
                'in:sale,presale,only'
            ],
            'category' => [
                'required',
                'integer'
            ],
            'description' => [
                'nullable',
                'max:100000',
            ],

            'colors' => 'required|array',
            'colors.*' => [
                'required',
                'numeric'
            ],

            'sex' => 'required|array',
            'sex.*' => [
                'required',
                'integer'
            ],

            'sizes' => 'array',
            'sizes.*' => [
                'required',
                'integer'
            ],

            'purchasePrice' => 'array',
            'purchasePrice.*' => [
                'required',
                'numeric',
            ],

            'salePrice' => 'array',
            'salePrice.*' => [
                'required',
                'numeric'
            ],

            'min' => 'array',
            'min.*' => [
                'required',
                'integer'
            ],

            'quantityModel' => 'array',
            'quantityModel.*' => [
                'required',
                'integer',
            ],

            'max' => 'array',
            'max.*' => [
                'required',
                'integer',
            ],
        ];
    }
}
