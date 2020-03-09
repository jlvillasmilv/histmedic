<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FamilyInterviewRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
             'patient_id'  => 'required|integer',
             'fecha_ef'    => 'required|date',
        ];
    }
}
