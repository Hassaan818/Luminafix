<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamAddRequest extends FormRequest
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
            'name' => ['string', 'required'],
            'job_title' => ['string', 'required'],
            'email' => ['email','required'],
            'phone' => ['required'],
            'description' => ['nullable'],
            'short_description' => ['string', 'required'],
            'image' => ['image','required','mimes:jpeg,jpg,png,gif'],
            'facebook' => ['nullable'],
            'instagram' => ['nullable'],
            'X' => ['nullable'],
            'linkedin' => ['nullable'],
            'skills' => ['required'],
            'status' => ['numeric', 'required']
        ];
    }
}
