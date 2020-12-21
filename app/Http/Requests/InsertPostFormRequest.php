<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertPostFormRequest extends FormRequest
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
            'product_name' => 'required|max:255',
            'product_price' => 'required|max:6',
        ];
    }

        public function messages()
        {
            return [
                'product_name.required' => 'A product name is required for the post.',
                'product_price.required' => 'Please add price for the post.',
                'product_price.max'=>'Maximum of 6 digits price can be inserted.',
            ];
        }
}
