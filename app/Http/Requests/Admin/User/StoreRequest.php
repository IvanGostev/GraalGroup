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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nickname' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'role' => 'required|integer',
            'password' => 'required|string',
        ];
    }
    public function messages()
    {
        return [
            'nickname.required' => 'Это поле необходимо заполнить',
            'nickname.string' => 'Тип данных должен быть строкой',
            'email.required' => 'Это поле необходимо заполнить',
            'email.string' => 'Тип данных должен быть строкой',
            'email.email' => 'Укажите email',
            'email.unique' => 'Такой email уже зарегистрирован',
            'role.integer' => 'Тип данных должен быть числом',
            'role.required' => 'Необходимо выбрать роль',
            'password.required' => 'Это поле необходимо заполнить',
            'password.string' =>  'Тип данных должен быть строкой',
        ];
    }
}
