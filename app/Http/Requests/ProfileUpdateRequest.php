<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|string|email|min:5|max:255|unique:users,email,' . $this->user()->id,
            'adresse' => 'nullable|string|min:3|max:100',
            'telephone' => ['nullable', 'regex:/^(\+212|0)([5-7])\d{8}$/'],
            'ville' => 'nullable|string|min:3|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'region' => 'nullable|string|min:3|max:100',
            'pays' => 'nullable|string|min:3|max:100',
            'code_postal' => 'nullable|string|min:4|max:8',
        ];
    }

    /**
     * Get custom error messages for validation.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Le champ Nom est obligatoire.',
            'name.string' => 'Le champ Nom doit être une chaîne de caractères.',
            'name.min' => 'Le champ Nom doit contenir entre 2 et 255 caractères.',
            'name.max' => 'Le champ Nom doit contenir entre 2 et 255 caractères.',

            'email.required' => 'Le champ Email est obligatoire.',
            'email.string' => 'Le champ Email doit être une chaîne de caractères.',
            'email.email' => 'Le champ Email doit être une adresse email valide.',
            'email.min' => 'Le champ Email doit contenir entre 5 et 255 caractères.',
            'email.max' => 'Le champ Email doit contenir entre 5 et 255 caractères.',
            'email.unique' => 'Cet Email est déjà utilisé. Veuillez en choisir un autre.',

            'adresse.string' => 'Le champ Adresse doit être une chaîne de caractères.',
            'adresse.min' => 'Le champ Adresse doit contenir entre 3 et 100 caractères.',
            'adresse.max' => 'Le champ Adresse doit contenir entre 3 et 100 caractères.',

            'telephone.regex' => 'Le champ Téléphone doit être un numéro marocain valide sans espaces (ex: +2126******** ou 07********).',

            'ville.string' => 'Le champ Ville doit être une chaîne de caractères.',
            'ville.min' => 'Le champ Ville doit contenir entre 3 et 100 caractères.',
            'ville.max' => 'Le champ Ville doit contenir entre 3 et 100 caractères.',

            'image.image' => 'Le fichier doit être une image.',
            'image.mimes' => 'L\'image doit être de type : jpeg, png, jpg, gif, svg.',
            'image.max' => 'La taille de l\'image ne doit pas dépasser 2 Mo.',

            'region.string' => 'Le champ Région doit être une chaîne de caractères.',
            'region.min' => 'Le champ Région doit contenir entre 3 et 100 caractères.',
            'region.max' => 'Le champ Région doit contenir entre 3 et 100 caractères.',

            'pays.string' => 'Le champ Pays doit être une chaîne de caractères.',
            'pays.min' => 'Le champ Pays doit contenir entre 3 et 100 caractères.',
            'pays.max' => 'Le champ Pays doit contenir entre 3 et 100 caractères.',

            'code_postal.string' => 'Le champ Code Postal doit être une chaîne de caractères.',
            'code_postal.min' => 'Le champ Code Postal doit contenir entre 4 et 8 caractères.',
            'code_postal.max' => 'Le champ Code Postal doit contenir entre 4 et 8 caractères.',
        ];
    }
}
