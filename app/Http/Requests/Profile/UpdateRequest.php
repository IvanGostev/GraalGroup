<?php

namespace App\Http\Requests\Profile;

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
            'description' => 'string',
            'img' => 'required|file',
        ];
    }
    public function messages()
    {
        return [
            'nickname.required' => 'Это поле необходимо заполнить',
            'nickname.string' => 'Тип данных должен быть строкой',
            'img.required' => 'Это поле необходимо заполнить',
            'img.file' => 'Необходимо выбрать файл',
            'nickname.description' => 'Тип данных должен быть строкой',
        ];
    }
}
