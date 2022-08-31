<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditDoctorRequest extends FormRequest
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
            "first_name" => 'min:2|max:30', //con la rule 'required' continuo ad ottenere errore nella validation
            "last_name" => 'min:2|max:30', //con la rule 'required' continuo ad ottenere errore nella validation
            "email" => 'email',
            "gender" => 'required|max:10',
            "specialization" => 'required|min:2|max:30',
            "location" => 'required|min:2|max:30'
        ];
    }

    
    public function messages()
    {
        return[
            'first_name.required'=>'Il nome è obbligatorio',
            'last_name.required'=>"Il cognome è obbligatorio",
            'gender.required'=>"Il genere è obbligatorio",
            'specialization.required'=>"La specializzazione è obbligatoria",
            'location.required'=>"La città è obbligatoria",
            'first_name.min'=>"Il nome dev'essere di minimo 2 caratteri",
            'first_name.max'=>"Il nome dev'essere di massimo 30 caratteri",
            'last_name.min'=>"Il cognome dev'essere di minimo 2 caratteri",
            'last_name.max'=>"Il cognome dev'essere di massimo 30 caratteri",
            'specialization.min'=>"La specializzazione dev'essere di minimo 2 caratteri",
            'specialization.max'=>"La specializzazione dev'essere di massimo 30 caratteri",
            'location.min'=>"La città dev'essere di minimo 2 caratteri",
            'location.max'=>"La città dev'essere di massimo 30 caratteri",
            'gender.max'=>"Il genere dev'essere di massimo 10 caratteri",
            'email.email'=>"Inserisci una email corretta",
        ];
    }
}
