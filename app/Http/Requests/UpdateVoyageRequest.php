<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVoyageRequest extends FormRequest
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
            'date_depart' => 'required',
            'date_arrivee' => 'required',
        
            'ville_depart_id' => 'required|exists:villes,id',
            'ville_arrivee_id' => 'required|exists:villes,id',
            'autocar_id' => 'required|exists:autocars,id',
            'type_voyage_id' => 'required|exists:type_voyages,id',
            'prix' => 'required|numeric|min:0',
        ];
    }
    public function messages(): array
    {
        return [
            'date_depart.required' => 'La date de départ est obligatoire.',
           
            'date_arrivee.required' => 'La date d\'arrivée est obligatoire.',
            
            'date_arrivee.after_or_equal' => 'La date d\'arrivée doit être égale ou postérieure à la date de départ.',
            'heure_depart.required' => 'L\'heure de départ est obligatoire.',
           
            'heure_arrivee.required' => 'L\'heure d\'arrivée est obligatoire.',
           
            'ville_depart_id.required' => 'La ville de départ est obligatoire.',
            'ville_depart_id.exists' => 'La ville de départ n\'existe pas.',
            'ville_arrivee_id.required' => 'La ville d\'arrivée est obligatoire.',
            'ville_arrivee_id.exists' => 'La ville d\'arrivée n\'existe pas.',
            'autocar_id.required' => 'L\'autocar est obligatoire.',
            'autocar_id.exists' => 'L\'autocar sélectionné n\'existe pas.',
            'type_voyage_id.required' => 'Le type de voyage est obligatoire.',
            'type_voyage_id.exists' => 'Le type de voyage sélectionné n\'existe pas.',
            'prix.required' => 'Le prix est obligatoire.',
            'prix.numeric' => 'Le prix doit être un nombre.',
            'prix.min' => 'Le prix doit être supérieur ou égal à 0.',
        ];
    }
}
