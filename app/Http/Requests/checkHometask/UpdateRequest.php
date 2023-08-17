<?php

namespace App\Http\Requests\checkHometask;

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
            'comment' => 'required|string',
            'course_id' => 'required|integer',
            'status' => 'required|integer',
            'hometask_id' => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'comment.required' => 'Это поле необходимо заполнить',
            'comment.string' => 'Тип данных должен быть строкой',
            'course_id.required' => 'Это поле необходимо заполнить',
            'course_id.integer' => 'Тип данных должен быть число',
            'hometask.required' => 'Это поле необходимо заполнить',
            'hometask.integer' => 'Тип данных должен быть число',
            'status.required' => 'Это поле необходимо заполнить',
            'status.integer' => 'Тип данных должен быть число',
        ];
    }
}
