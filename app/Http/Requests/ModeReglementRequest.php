<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModeReglementRequest extends FormRequest
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
            'mode_reglement' => 'required|regex:/^[a-zA-Z]+$/|max:255|min:3',
        ];
    }
    public function messages(){
        return[
            'mode_reglement.required'=>'mode de reglement est obligatoire ',
            'mode_reglement.min '=>'mode de reglement minimal 3 lettre ',
            'mode_reglement.max'=>'mode de reglement est maximal 255 lettre',
            'mode_reglement.regex'=>'mode de reglement doit etre formal chaine de caracter'
        ];
    }
}
