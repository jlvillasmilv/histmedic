<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaFormat3Request extends FormRequest
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

   
    public function rules()
    {
        return [
             'patient_id'  => 'required|integer',
             'DATH1'       => 'required|date',
             'BW'          => 'required|numeric',
             'BH'          => 'required|numeric',
             'SBP1'        => 'required|integer',
             'DBP1'        => 'required|integer',
             'PAM1'        => 'required|integer',
             'RATE1'       => 'required|integer',
             'DATH2'       => 'nullable|date',
             'SBP2'        => 'nullable|integer',
             'DBP2'        => 'nullable|integer',  
             'PAM2'        => 'nullable|integer',  
             'RATE2'       => 'nullable|integer',  
             'DATH3'       => 'nullable|date',  
             'SBP3'       => 'nullable|integer',  
             'DBP3'       => 'nullable|integer',  
             'PAM3'       => 'nullable|integer',  
             'RATE3'      => 'nullable|integer', 
             'A_SBP6'     => 'nullable|integer',
            'A_DBP6'      => 'nullable|integer',
            'A_PAM'       => 'nullable|integer',
            'RATE6'       => 'nullable|integer',
            'x1OSBP'      => 'nullable|integer',
            'x1ODBP'      => 'nullable|integer',
            'x1OPAM'      => 'nullable|integer',
            'RATE8'       => 'nullable|integer',
            'x3OSBP'      => 'nullable|integer',
            'x3ODBP'      => 'nullable|integer',
            'x3OPAM'      => 'nullable|integer',
            'RATE9'      => 'nullable|integer',
            'x5OSBP'      => 'nullable|integer',
            'x5ODBP'      => 'nullable|integer',
            'x5OPAM'      => 'nullable|integer',
            'RATE10'      => 'nullable|integer',
            'Fatiga'      => 'nullable|integer',
            'Debilidad'   => 'nullable|integer',
            'Mareos'      => 'nullable|integer',
            'Vision_borrosa'   => 'nullable|integer',
            'Vision_luminosos' => 'nullable|integer',
            'Palpitaciones'   => 'nullable|integer',
            'Cefalea'         => 'nullable|integer',
            'Dolor_cuello'    => 'nullable|integer',
            'Otras_sintomas'  => 'nullable|integer',
            'Sudoracion'      => 'nullable|integer',
            'Palidez_cut-muc' => 'nullable|integer',
            'Otras_signos'    => 'nullable|integer',
             
        ];
    }
}
