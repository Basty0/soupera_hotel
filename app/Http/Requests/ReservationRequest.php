<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
			'statut' => 'string|in:en_cour,fin', // Champ statut doit être une chaîne et doit être soit 'en_cour' soit 'fin'
            'nom_client' => 'required|string', // Champ nom_client peut être nul ou une chaîne (string)
            'cin' => 'nullable|string', // Champ cin peut être nul ou une chaîne (string)
            'telephone_client' => 'nullable|string', // Champ telephone_client peut être nul ou une chaîne (string)
            'designation' => 'required|string', // Champ designation est requis et doit être une chaîne (string)
            'user_id' => 'required|exists:users,id', // Champ user_id est requis et doit correspondre à un ID existant dans la table users
            'date_arrivee' => 'nullable|date', // Champ date_arrivee peut être nul ou une date valide
            'date_depart' => 'nullable|date|after:date_arrivee', // Champ date_depart peut être nul ou une date valide et doit être postérieur à date_arrivee s'il est présent
            'heure_entrer' => 'nullable|date_format:H:i', // Champ heure_entrer peut être nul ou au format heure:minute (HH:MM)
            'heure_sortie' => 'nullable|date_format:H:i|after:heure_entrer', // Champ heure_sortie peut être nul ou au format heure:minute (HH:MM) et doit être postérieur à heure_entrer s'il est présent
            'tarif' => 'nullable|numeric|min:0', // Champ tarif peut être nul ou un nombre numérique positif
            'chambre_id' => 'required|exists:chambres,id', // Champ chambre_id est requis et doit correspondre à un ID existant dans la table chambres

        ];
    }
}