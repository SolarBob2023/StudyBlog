<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполения',
            'name.string' => 'Данные должны быть строкой',
            'email.required' => 'Это поле необходимо для заполения',
            'email.string' => 'Данные должны быть строкой',
            'email.email' => 'Почта должна быть в формате test@mail.ru',
            'email.unique' => 'Такой email уже зарегистрирован',
        ];
    }
}
