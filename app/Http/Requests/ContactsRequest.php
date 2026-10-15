<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|min:2|max:50",
            "email" => ["required", "min:5", "max:100", "email"],
            "subject" => ["required", "min:5", "max:100"],
            "message" => ["required", "min:5", "max:200"],
        ];
    }
    public function messages(): array
    {
        return [
            "name.required" => "Please enter your name",
            "email.required" => "Please enter your email",
            "subject.required" => "Please enter your subject",
            "message.required" => "Please enter your message",
            "name.min" => "Your name must contain at least 2 symbols",
            "email.min" => "Your email must contain at least 5 symbols",
            "subject.min" => "Your subject must contain at least 5 symbols",
            "message.min" => "Your message must contain at least 5 symbols",
            "name.max" => "You cannot enter more than 50 symbols",
            "email.max" => "You cannot enter more than 100 symbols",
            "subject.max" => "You cannot enter more than 100 symbols",
            "message.max" => "You cannot enter more than 200 symbols",
            "email.email" => "Your email must be a valid email address",
        ];
    }
}
