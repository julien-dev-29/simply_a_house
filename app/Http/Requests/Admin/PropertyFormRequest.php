<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'title' => ['required', 'min:8'],
            'description' => ['required', 'min:8'],
            'surface' => ['required', 'min:1'],
            'rooms' => ['required', 'min:1'],
            'bedrooms' => ['required', 'min:0'],
            'floor' => ['required', 'min:0'],
            'price' => ['required', 'min:0'],
            'city' => ['required', 'min:1'],
            'address' => ['required', 'min:8'],
            'postal_code' => ['required', 'min:4'],
            'sold' => ['required', 'boolean'],
            'options' => ['array', 'exists:options,id'],
            'pictures' => ['array'],
            'pictures.*' => ['image', 'max:2000']
        ];
    }
}
