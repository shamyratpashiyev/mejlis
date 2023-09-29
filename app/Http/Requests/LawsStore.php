<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LawsStore extends FormRequest
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
            'title_tm' => 'required',
            'title_ru' => 'required',
            // 'title_en' => 'required',
            'description_tm' => 'required',
            'description_ru' => 'required',
            // 'description_en' => 'required',
            'published_date' => 'required|date'
        ];
    }
}
