<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use LoginActionInput;

class LoginRequest extends FormRequest
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
            'email' => ['string', 'email', 'max:255'],
            'password' => ['string', 'password', 'max:255']
        ];
    }

    /**
     * dataTransferObject
     * @return LoginActionInput
     */
    public function makeData(): LoginActionInput
    {
        return LoginActionInput::from($this->validated());
    }
}
