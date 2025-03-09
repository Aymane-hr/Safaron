<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeVoyageRequest extends FormRequest
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
            'type_voyage' => 'required|regex:/^[a-zA-Z]+$/|max:255|min:3',
        ];
    }
    public function messages()
    {
        return[
            'type_voyage.required'=> 'Le champs Type Voyage est obligatoire.', 
            'type_voyage.min'=> 'Le champs Type Voyage doit contenir au moins 3 caractères.',
            'type_voyage.regex'=> 'Le champs Type Voyage doit être une chaîne de caractères. ',
            'type_voyage.max'=> 'Le champs Type Voyage ne doit pas dépasser 255 caractères.'
        ];
    }
}
