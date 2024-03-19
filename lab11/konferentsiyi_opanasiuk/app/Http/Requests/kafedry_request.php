<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class kafedry_request extends FormRequest
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
    public function rules() {
        return [
            'nazva_kafedry' => 'required|min:5',
            'roztashuvannya' => 'required|min:5|max:255'
        ];
    }

    public function messages() {
        return [
            'nazva_kafedry.required' => 'Поле "Назва кафедри" - обов\'язкове поле',
            'roztashuvannya.required' => 'Поле "Розташування" - обов\'язкове поле',
            'nazva_kafedry.min' => 'Поле "Назва кафедри" - мінімальна к-ть символів - 5',
            'roztashuvannya.min' => 'Поле "Розташування" - мінімальна к-ть символів - 5',
            'roztashuvannya.max' => 'Поле "Розташування" - максимальна к-ть символів - 255',
        ];
    }
}
