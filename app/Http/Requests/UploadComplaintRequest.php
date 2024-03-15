<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadComplaintRequest extends FormRequest
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
            'photo' => 'required|mimes:jpg,gif,png',
        ];
    }

    public function messages()
    {
        return [
            'photo.required' => 'Parece que você esqueceu de selecionar uma foto!',
            'photo.mimes' => 'Parece que você selecionou um tipo de imagem que não é aceito pelo sistema. Selecione apenas imagens do tipo: JPG, PNG e GIF!',
        ];
    }
}
