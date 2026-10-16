<?php

namespace App\Http\Requests\Ahte;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'fname'=>['nullable', 'string'],
            'lname'=>['nullable', 'string'],
            'email'=>['nullable', 'string'],
            'phone'=>['nullable', 'string'],
            'organization'=>['nullable', 'string'],
            'position'=>['nullable', 'string'],
            'language'=>['nullable', 'string'],
            'interpreter'=>['nullable', 'string'],
            'hotel'=>['nullable', 'string'],
            'visa'=>['nullable', 'string'],
            'source'=>['nullable', 'string'],
            'package'=>['nullable', 'string'],
            'exhibition'=>['nullable', 'string'],
            'pavilion'=>['nullable', 'string'],
            'g-recaptcha-response' => 'required|captcha',
        ];
    }

        /**
         * Get custom error messages for validation rules.
         *
         * @return array<string, string>
         */
        public function messages(): array
        {
            return [
                'fname.string' => 'The first name must be a string.',
                'lname.string' => 'The last name must be a string.',
                'email.string' => 'The email must be a string.',
                'phone.string' => 'The phone number must be a string.',
                'organization.string' => 'The organization must be a string.',
                'position.string' => 'The position must be a string.',
                'language.string' => 'The language must be a string.',
                'interpreter.string' => 'The interpreter must be a string.',
                'hotel.string' => 'The hotel must be a string.',
                'visa.string' => 'The visa must be a string.',
                'source.string' => 'The source must be a string.',
                'package.string' => 'The package must be a string.',
                'exhibition.string' => 'The exhibition must be a string.',
                'pavilion.string' => 'The pavilion must be a string.',
                'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
                'g-recaptcha-response.captcha' => 'The captcha verification failed.',
            ];
        }
}
