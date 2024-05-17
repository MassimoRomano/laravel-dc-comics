<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:100',
            'thumb' => 'required|max:255',
            'type' => 'nullable|max:20',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|max:10',
            'description' => 'nullable|max:500',
            'price' => 'required',
        ];
    }
}
