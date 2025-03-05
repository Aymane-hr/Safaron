<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreautocarRequest extends FormRequest
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
            'societe_id.required' => 'Le champ société est obligatoire.',
            'societe_id.exists' => 'La société sélectionnée n\'existe pas.',

            'nbr_siege.required' => 'Le champ nombre de sièges est obligatoire.',
            'nbr_siege.integer' => 'Le champ nombre de sièges doit être un entier.',
            'nbr_siege.min' => 'Le champ nombre de sièges doit être au moins 1.',

            'matricule.required' => 'Le champ matricule est obligatoire.',
            'matricule.string' => 'Le champ matricule doit être une chaîne de caractères.',
            'matricule.max' => 'Le champ matricule ne peut pas dépasser 255 caractères.',

            'image.image' => 'L\'image doit être un fichier image valide.',
            'image.mimes' => 'Les formats valides pour l\'image sont jpeg, png, jpg, gif ,webp.',
        ];
    }
}
