<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeceasedPatientRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
            'patient_id'         => 'required|integer|unique:deceased_patients,patient_id,'.$this->deceased_patient,
            'nom_infor'          => 'required|max:50',
            'parentesco'         => 'required|max:50',
            'ed_morte'           => 'required|integer',
            'fech_morte'         => 'required|date',
            'lug_morte'          => 'required|max:50',
            'caus_morte'         => 'required|max:50',
            'lug_vela'           => 'required|max:60',
            'fech_entrev'        => 'required|date',
            'Entrevistador'      => 'required|max:50',
            'Obs_Hist_Fallecido' => 'nullable|max:150',
        ];
    }
}
