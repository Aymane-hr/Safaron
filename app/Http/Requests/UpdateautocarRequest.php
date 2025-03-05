<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateautocarRequest extends FormRequest
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
'societe_id' => 'required|exists:societes,id', // Ensure societe_id exists in societes table
            'nbr_siege' => 'required|integer|min:1', // Validate as integer
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp', // Validate image file
            'matricule' => 'required|string|max:255', // Validate as string
        ];
    }

    public function messages(): array
    {
        return [
            'nbr_siege.required' => 'Le champ nombre de siege est obligatoire.',
            'nbr_siege.double' => 'Le champs nombre de siege doit être une chaîne de caractères.',
            'nbr_siege.min' => 'Le champs désignation doit contenir au moins 1 caractères.',
            'matricule.required' => 'Le champ matricule est obligatoire.',
            'matricule.string' => 'Le champ matricule doit être une chaîne de caractères',
            'matricule.max' => 'Le champ matricule doit contenir maximum 255 caractères.',
            'image.mimes' => 'Les formats valides pour image sont jpeg, png, jpg, gif.',
        ];
    }
}
