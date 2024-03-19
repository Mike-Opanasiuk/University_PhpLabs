<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class spivrobitnyk_request extends FormRequest
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
            'prizvyshche' => 'required|min:3|max:100',
            'imya' => 'required|min:3|max:100'
        ];
    }

    public function messages() {
        return [
            'prizvyshche.required' => 'Поле "Прізвище" - обов\'язкове поле',
            'imya.required' => 'Поле "Ім\'я" - обов\'язкове поле',
            'prizvyshche.min' => 'Поле "Прізвище" - мінімальна к-ть символів - 3',
            'imya.min' => 'Поле "Ім\'я" - мінімальна к-ть символів - 3',
            'prizvyshche.max' => 'Поле "Прізвище" - максимальна к-ть символів - 100',
            'imya.max' => 'Поле "Ім\'я" - максимальна к-ть символів - 100',
        ];
    }
}

