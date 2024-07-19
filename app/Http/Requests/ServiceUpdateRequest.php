<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceUpdateRequest extends FormRequest
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
            'title' => ['string', 'required'],
            'sub_heading' => ['string', 'required'],
            'short_description' => ['string', 'required'],
            'description' => ['string', 'required'],
            'logo' => ['image','sometimes','required','mimes:jpeg,jpg,png,gif'],
            'status' => ['numeric', 'required']        
        ];
    }
}
