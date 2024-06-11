<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RedesSocialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return match ($this->method()) {
            'POST', 'PUT' => [
                'usuario' => ['required', 'string', 'max:100'],
                'observaciones' => ['required', 'string', 'max:100'],
            ],
            default => [
                'usuario' => ['required', 'string', 'max:100'],
                'observaciones' => ['required', 'string', 'max:100'],
            ],
};

    }
}
