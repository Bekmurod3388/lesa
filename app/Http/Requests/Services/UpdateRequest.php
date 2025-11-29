<?php

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'cost' => 'required|integer|min:0',
            'unit' => 'required|string|in:item,hour,day',
            'status' => 'required|in:active,inactive',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Xizmat nomi majburiy.',
            'name.string' => 'Xizmat nomi matn bo‘lishi kerak.',
            'name.max' => 'Xizmat nomi 255 ta belgidan oshmasligi kerak.',
            'description.string' => 'Tavsif matn bo‘lishi kerak.',
            'description.max' => 'Tavsif 1000 ta belgidan oshmasligi kerak.',
            'cost.required' => 'Narx majburiy.',
            'cost.integer' => 'Narx butun son bo‘lishi kerak.',
            'cost.min' => 'Narx 0 dan kam bo‘lishi mumkin emas.',
            'unit.required' => 'O‘lchov birligi majburiy.',
            'unit.in' => 'O‘lchov birligi noto‘g‘ri tanlangan.',
            'status.required' => 'Status majburiy.',
            'status.in' => 'Status noto‘g‘ri tanlangan.',
        ];
    }
}
