<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaFormat1Request extends FormRequest
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
             'x1OSBP'      => 'required|integer',
             'x1ODBP'      => 'required|integer',
             'x1OPAM'      => 'required|integer',
             'RATE8'       => 'required|integer',
             'DATH2'       => 'nullable|date',
             'BW2'         => 'nullable|numeric',
             'SBP2'        => 'nullable|numeric',
             'DBP2'        => 'nullable|numeric',
             'PAM2'        => 'nullable|numeric',
             'RATE2'       => 'nullable|numeric',
             'x2OSBP'      => 'nullable|numeric',
             'x2ODBP'      => 'nullable|numeric',
             'x2OPAM'      => 'nullable|numeric',
             'RATE_pie2'   => 'nullable|numeric',
             'DATH3'       => 'nullable|date',
             'BW3'         => 'nullable|numeric',
             'SBP3'        => 'nullable|numeric',
             'DBP3'        => 'nullable|numeric',
             'PAM3'        => 'nullable|numeric',
             'RATE3'       => 'nullable|numeric',
             'x3OSBP'      => 'nullable|numeric',
             'x3ODBP'      => 'nullable|numeric',
             'x3OPAM'      => 'nullable|numeric',
             'RATE_pie3'   => 'nullable|numeric',
             'DATH4'       => 'nullable|date',
             'BW4'         => 'nullable|numeric',
             'SBP4'        => 'nullable|numeric',
             'DBP4'        => 'nullable|numeric',
             'PAM4'        => 'nullable|numeric',
             'RATE4'       => 'nullable|numeric',
             'x4OSBP'      => 'nullable|numeric',
             'x4ODBP'      => 'nullable|numeric',
             'x4OPAM'      => 'nullable|numeric',
             'RATE_pie4'   => 'nullable|numeric',
             'DATH5'       => 'nullable|date',
             'BW5'         => 'nullable|numeric',
             'SBP5'        => 'nullable|numeric',
             'DBP5'        => 'nullable|numeric',
             'PAM5'        => 'nullable|numeric',
             'RATE5'       => 'nullable|numeric',
             'x5OSBP'      => 'nullable|numeric',
             'x5ODBP'      => 'nullable|numeric',
             'x5OPAM'      => 'nullable|numeric',
             'RATE_pie5'   => 'nullable|numeric',
             'DATH6'       => 'nullable|date',
             'BW6'         => 'nullable|numeric',
             'SBP6'        => 'nullable|numeric',
             'DBP6'        => 'nullable|numeric',
             'PAM6'        => 'nullable|numeric',
             'RATE6'       => 'nullable|numeric',
             'x6OSBP'      => 'nullable|numeric',
             'x6ODBP'      => 'nullable|numeric',
             'x6OPAM'      => 'nullable|numeric',
             'RATE_pie6'   => 'nullable|numeric',
        ];
    }
}
