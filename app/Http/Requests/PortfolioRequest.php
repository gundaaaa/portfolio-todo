<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'contact') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'email',
            'tel' => 'numeric',
            'Requirements' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'名前は必ず入力してください。',
            'email.email' =>'アドレスは必ず入力してください。',
            'tel.numeric' =>'電話番号は必ず入力してください。',
            'Requirements.required' =>'内容の必ず入力してください。',
        ];
    }
}
