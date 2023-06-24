<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
//            'password' => 'required|string',
            'role' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполения',
            'name.string' => 'Данные должны быть строкой',
//            'password.required' => 'Это поле необходимо для заполения',
//            'password.string' => 'Данные должны быть строкой',
            'email.required' => 'Это поле необходимо для заполения',
            'email.string' => 'Данные должны быть строкой',
            'email.email' => 'Почта должна быть в формате test@mail.ru',
            'email.|unique:users' => 'Такой email уже зарегистрирован',
        ];
    }
}
