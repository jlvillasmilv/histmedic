<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class PacienteRequest extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        
        return [
            'nac' => 'required|max:1',
            'hist_id' => 'required|numeric|unique:patient,hist_id,'.$request->input('id').',patient_id',
            'cedula'  => 'required|numeric|unique:patient,cedula,'.$request->input('id').',patient_id',
            'first_name'    => 'required|max:50',
            'second_name'   => 'nullable|max:50',
            'last_name'     => 'required|max:50',
            'second_last_name'=> 'nullable|max:50',
            'adress'        => 'required|max:150',
            'date_birth'    => 'required|date',
            'state_country' => 'required|max:60',
            'city_born'     => 'nullable|max:60',
            'gender'        => 'required|max:1',
            'ethnicity'     => 'required|max:1',
            'education_grade' => 'nullable|max:1',
        ];
    }
}