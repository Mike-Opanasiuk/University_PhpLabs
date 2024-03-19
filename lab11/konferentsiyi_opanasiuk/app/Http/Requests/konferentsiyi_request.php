<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class konferentsiyi_request extends FormRequest
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
            'data_pochatku' => 'required|date',
            'data_zakinchennya' => 'required|date|after:data_pochatku',
        ];
    }

    public function messages() {
        return [
            'data_pochatku.required' => 'Поле "Дата початку" - обов\'язкове поле',
            'data_zakinchennya.required' => 'Поле "Дата закінчення" - обов\'язкове поле',
            'data_zakinchennya.after' => 'Поле "Дата закінчення" повинне бути більше за "Дата початку"',
        ];
    }
}
