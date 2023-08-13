<?php

namespace App\Http\Requests\Course;

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
            'title' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|string',
            'description' => 'required|string',
            'img' => 'required|file',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо заполнить',
            'title.string' => 'Тип данных должен быть строкой',
            'category.string' => 'Тип данных должен быть строкой',
            'category.required' => 'Это поле необходимо заполнить',
            'price.required' => 'Это поле необходимо заполнить',
            'price.string' => 'Тип данных должен быть строкой',
            'description.required' => 'Это поле необходимо заполнить',
            'description.string' => 'Тип данных должен быть строкой',
            'img.required' => 'Это поле необходимо заполнить',
            'img.file' => 'Необходимо выбрать файл',
        ];
    }
}
