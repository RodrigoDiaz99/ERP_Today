<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PromotionRequest extends FormRequest
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
            'product' => [
                'required',
                'numeric'
            ],
            'name' => [
                'required',
                'min:1',
                'max:255'
            ],
            'description' => [
                'nullable',
                'min:1',
                'max:10000'
            ],
            'instructions' => [
                'nullable',
                'min:1',
                'max:10000'
            ],
            'discount' => [
                'required',
                'numeric',
                'min:1'
            ],
            'type' => [
                'required',
                'in:percentage,item'
            ],
            'items' => [
                'nullable',
                'numeric',
                'min:1'
            ],
            'ending' => [
                'nullable',
                'date'
            ]
        ];
    }
}
