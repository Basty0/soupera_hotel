<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChambreRequest extends FormRequest
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
            'type_id' => 'required|integer',
            'prix_par_nuit' => 'required|numeric',
            'prix_par_heure' => 'required|numeric',
            'num' => 'required|numeric',
            //'image_principale' => 'required',
        ];
    }
}