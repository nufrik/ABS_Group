<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:150',
            'slug' => 'required|string|max:255',
            'year' => 'required|numeric|max_digits:4',
            'description' => 'required|string|max:2000',
            'cover' => 'required|string|max:255',       // |image|size:500
            'category_id' => 'required|numeric',
            'author_id' => 'required|numeric',
        ];
    }
}
