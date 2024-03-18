<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMailContactRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|min:10|max:255'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Parece que você esqueceu de informar o seu nome!',
            'name.min' => 'Parece que você não informou o seu nome completo!',
            'name.max' => 'O nome informado deve ter no máximo 255 caracteres!',
            'email.required' => 'Parece que você esqueceu de informar o seu e-mail!',
            'email.email' => 'O e-mail informado parece não ser válido!',
            'email.max' => 'O e-mail informado deve ter no máximo 255 caracteres!',
            'message.required' => 'Parece que você esqueceu de informar o sua mensagem!',
            'message.min' => 'Sua mensagem deve ter ao menos 10 caracteres!',
            'message.max' => 'Sua mensagem deve ter no máximo 255 caracteres!',
        ];
    }
}
