<?php

namespace App\Http\Requests\Training;

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
            'content' => 'required|string',
            'course_id' => 'required|integer',
            'hometask_id' => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'content.required' => 'Это поле необходимо заполнить',
            'content.string' => 'Тип данных должен быть строкой',
            'course_id.required' => 'Это поле необходимо заполнить',
            'course_id.integer' => 'Тип данных должен быть число',
            'hometask.required' => 'Это поле необходимо заполнить',
            'hometask.integer' => 'Тип данных должен быть число',
        ];
    }
}
