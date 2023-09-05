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
            'biography_en' => '',
            'biography_tm' => '',
            'biography_ru' => '',
            'position_tm' => '',
            'position_ru' => '',
            'position_en' => '',
            'birth_year_tm' => '',
            'birth_year_ru' => '',
            'birth_year_en' => '',
            'velayat_id' => 'required', 
            'district_id' => 'required',
            'email' => ''
        ];
    }
}
