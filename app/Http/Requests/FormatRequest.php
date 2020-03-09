<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormatRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'format_id' => 'required',
            'patient_id' => 'required',
            'date_evaluation'  => 'required',
            ];
    }
}
