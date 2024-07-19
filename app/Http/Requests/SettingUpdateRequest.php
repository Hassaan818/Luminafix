<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingUpdateRequest extends FormRequest
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
            'phone' => ['string', 'required'],
            'email' => ['string', 'required'],
            'logo' => ['image', 'nullable', 'mimes:jpg, jpeg,png'],
            'favicon' => ['image', 'nullable', 'mimes:jpg,jpeg,png'],
            'facebook' => ['nullable'],
            'instagram' => ['nullable'],
            'twitter' => ['nullable'],
            'linkedin' => ['nullable'],
            'terms_and_conditions' => ['nullable','string'],
            'privacy_policy' => ['nullable','string'],
        ];
    }
}
