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
     * @return array<string, mixed>
     */

    public function rules()
    {

        return [
            'nickname' => 'required|string',
            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|integer',
            'description' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'nickname.required' => 'Это поле необходимо заполнить',
            'nickname.string' => 'Тип данных должен быть строкой',
            'role.integer' => 'Тип данных должен быть числом',
            'role.required' => 'Необходимо выбрать роль',
            'description.string' => 'Тип данных должен быть строкой',
            'description.required' => 'Необходимо выбрать роль',
        ];
    }
}
