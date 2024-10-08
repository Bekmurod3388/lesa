<?php

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Разрешить выполнение запроса
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'cost' => 'required|numeric|min:0',
            'count' => 'required|numeric|min:0',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Ism maydoni to\'ldirilishi shart.',
            'name.string' => 'Ism maydoni matn bo\'lishi kerak.',
            'name.max' => 'Ism maydoni 255 ta belgidan oshmasligi kerak.',
            'cost.required' => 'Narx maydoni to\'ldirilishi shart.',
            'cost.numeric' => 'Narx maydoni raqam bo\'lishi kerak.',
            'cost.min' => 'Narx maydoni 0 dan kam bo\'lmasligi kerak.',
            'count.required' => 'Soni maydoni to\'ldirilishi shart.',
            'count.numeric' => 'Soni maydoni raqam bo\'lishi kerak.',
            'count.min' => 'Soni maydoni 0 dan kam bo\'lmasligi kerak.',
        ];
    }
}
