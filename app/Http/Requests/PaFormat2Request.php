<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaFormat2Request extends FormRequest
{
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
             'patient_id'  => 'required|integer',
             'DATH1'       => 'required|date',
             'A_SBP6'      => 'required|integer',
             'RATE6'       => 'required|integer',
             'A_DBP6'      => 'required|integer',
             '1OSBP'       => 'required|integer',
             'RATE8'       => 'required|integer',
             '5OSBP'       => 'required|integer',
             'RATE10'      => 'required|integer',
             '1ODBP'       => 'required|integer',            
        ];
    }
}
