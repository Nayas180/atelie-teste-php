<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticipantesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "cpf" => 'required',
            "nome" => 'required',
            "email" => 'required|email',
            "data_de_nascimento" => 'required'
        ];
    }

    public function messages()
    {
        return [
            //
        ];
    }
}
