<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComplaintRequest extends FormRequest
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
            'author' => 'required|min:3',
            'email_author' => 'required|email',
            'localization' => 'required|min:5',
            'reference' => 'required|min:5',
            'photo' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'author.required' => 'Parece que você esqueceu de informar o seu nome!',
            'author.min' => 'Parece que você não informou o seu nome completo!',
            'email_author.required' => 'Parece que você esqueceu de informar o seu e-mail!',
            'email_author.email' => 'O e-mail informado parece não ser válido!',
            'localization.required' => 'Parece que você esqueceu de informar a localização do buraco!',
            'localization.min' => 'O endereço informado é muito curto!',
            'reference.required' => 'Parece que você esqueceu de informar um ponto de referência!',
            'reference.min' => 'O ponto de referência informado é muito curto!',
            'photo.required' => 'Parece que você esqueceu de selecionar uma foto ou o arquivo selecionado não está em um formato não aceito pelo sistema. Selecione apenas imagens do tipo: JPG, PNG ou GIF!'
        ];
    }
}
