<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
            'email'   => 'required|email',
            'password' => 'required|max:6',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'An email address is required',
            'password.required' => 'A password is required',
            'password.max'=>'The credentials do not match.',
        ];
    }
}
