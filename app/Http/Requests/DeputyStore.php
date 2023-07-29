<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeputyStore extends FormRequest
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
            'fullname_tm' => 'required',
            'fullname_ru' => 'required',
            'fullname_en' => 'required',
            'biography_en' => 'required',
            'biography_tm' => 'required',
            'biography_ru' => 'required',
            'position_tm' => 'required',
            'position_ru' => 'required',
            'position_en' => 'required',
            'birth_year_tm' => 'required',
            'birth_year_ru' => 'required',
            'birth_year_en' => 'required',
            'velayat_id' => '', 
            'election_district_id' => '',
            'email' => 'required|email'
        ];
    }
}
