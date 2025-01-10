<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Initial_weightRequest extends FormRequest
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
            'weight' => 'required|digits_between:1,4|decimal:1',
            'target_weight' => 'required|digits_between:1,4|decimal:1',
        ];
    }

    public function messages()
  {
    return [
      'weight.required' => '現在の体重を入力してください',
      'weight.digits_between' => '4桁までの数字で入力してください',
      'weight.decimal' => '小数点は1桁で入力してください',
      'target_weight.required' => '現在の体重を入力してください',
      'target_weight.digits_between' => '4桁までの数字で入力してください',
      'target_weight.decimal' => '小数点は1桁で入力してください',
    ];
}
}