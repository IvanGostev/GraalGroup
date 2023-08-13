<?php

namespace App\Http\Requests\Hometask;

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
            'content' => 'required|string',
            'id' => 'integer',
            'course_id' => 'integer',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо заполнить',
            'title.string' => 'Тип данных должен быть строкой',
            'content.required' => 'Это поле необходимо заполнить',
            'content.string' => 'Тип данных должен быть строкой',
            'course_id.integer' => 'Тип данных должен быть число',
            'id.integer' => 'Тип данных должен быть число',
        ];
    }
}
