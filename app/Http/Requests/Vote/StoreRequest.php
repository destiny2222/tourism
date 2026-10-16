<?php

namespace App\Http\Requests\Vote;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'country' => 'nullable|string|max:100',
            'department' => 'nullable|string|max:100',
            'career' => 'nullable|string|max:100',
            'unique_id' => 'required|string|max:255|unique:contestants,unique_id',
            'votes' => 'integer|min:0',
            'description' => 'nullable|string|max:1000',

        ];
    }
}
