<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventoryRequest extends FormRequest
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
        if($this->alert == "on"){
            if($this->prices == "on"){
                return [
                    'product' => [
                        'required',
                        'integer'
                    ],
                    'type' => [
                        'required',
                        'in:sale,presale,only'
                    ],
                    'min' => [
                        'required',
                        'numeric',
                        'min:0.01',
                        'max:' . $this->max
                    ],
                    'quantity' => [
                        'required',
                        'numeric',
                        'between:' . $this->min . ',' . $this->max
                    ],
                    'max' => [
                        'required',
                        'numeric',
                        'min:' . $this->quantity,
                        'max:100000'
                    ],
                    'purchasePrice' => [
                        'required',
                        'numeric',
                        'min:0.01',
                        'max:' . $this->salePrice
                    ],
                    'salePrice' => [
                        'required',
                        'numeric',
                        'min:' . $this->purchasePrice,
                        'max:100000'
                    ]
                ];
            }else {
                return [
                    'product' => [
                        'required',
                        'integer'
                    ],
                    'type' => [
                        'required',
                        'in:sale,presale,only'
                    ],
                    'min' => [
                        'required',
                        'numeric',
                        'min:0.01',
                        'max:' . $this->max
                    ],
                    'quantity' => [
                        'required',
                        'numeric',
                        'between:' . $this->min . ',' . $this->max
                    ],
                    'max' => [
                        'required',
                        'numeric',
                        'min:' . $this->quantity,
                        'max:100000'
                    ],
                    'purchasePrice' => [
                        'nullable',
                        'numeric',
                        'min:0.01',
                        'max:' . $this->salePrice
                    ],
                    'salePrice' => [
                        'nullable',
                        'numeric',
                        'min:' . $this->purchasePrice,
                        'max:100000'
                    ]
                ];
            }
        }else {
            if($this->prices == "on"){
                return [
                    'product' => [
                        'required',
                        'integer'
                    ],
                    'type' => [
                        'required',
                        'in:sale,presale,only'
                    ],
                    'min' => [
                        'nullable',
                        'numeric'
                    ],
                    'quantity' => [
                        'required',
                        'numeric'
                    ],
                    'max' => [
                        'nullable',
                        'numeric'
                    ],
                    'purchasePrice' => [
                        'required',
                        'numeric',
                        'min:0.01',
                        'max:' . $this->salePrice
                    ],
                    'salePrice' => [
                        'required',
                        'numeric',
                        'min:' . $this->purchasePrice,
                        'max:100000'
                    ]
                ];
            }else{
                return [
                    'product' => [
                        'required',
                        'integer'
                    ],
                    'type' => [
                        'required',
                        'in:sale,presale,only'
                    ],
                    'min' => [
                        'nullable',
                        'numeric'
                    ],
                    'quantity' => [
                        'required',
                        'numeric'
                    ],
                    'max' => [
                        'nullable',
                        'numeric'
                    ],
                    'purchasePrice' => [
                        'nullable',
                        'numeric',
                        'min:0.01',
                        'max:' . $this->salePrice
                    ],
                    'salePrice' => [
                        'nullable',
                        'numeric',
                        'min:' . $this->purchasePrice,
                        'max:100000'
                    ]
                ];
            }
        }
    }
}
