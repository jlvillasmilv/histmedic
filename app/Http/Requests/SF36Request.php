<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SF36Request extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'patient_id' => 'required|numeric',
            'sf_encuestador' => 'nullable|max:100',
            'datsf36' => 'required|date',
            'sf1' => 'required|numeric',
            'sf2' => 'required|numeric',
            'sf3' => 'required|numeric',
            'sf4' => 'required|numeric',
            'sf5' => 'required|numeric',
            'sf6' => 'required|numeric',
            'sf7' => 'required|numeric',
            'sf8' => 'required|numeric',
            'sf9' => 'required|numeric',
            'sf10' => 'required|numeric',
            'sf11' => 'required|numeric',
            'sf12' => 'required|numeric',
            'sf13' => 'required|numeric',
            'sf14' => 'required|numeric',
            'sf15' => 'required|numeric',
            'sf16' => 'required|numeric',
            'sf17' => 'required|numeric',
            'sf18' => 'required|numeric',
            'sf19' => 'required|numeric',
            'sf20' => 'required|numeric',
            'sf21' => 'required|numeric',
            'sf22' => 'required|numeric',
            'sf23' => 'required|numeric',
            'sf24' => 'required|numeric',
            'sf25' => 'required|numeric',
            'sf26' => 'required|numeric',
            'sf27' => 'required|numeric',
            'sf28' => 'required|numeric',
            'sf29' => 'required|numeric',
            'sf30' => 'required|numeric',
            'sf31' => 'required|numeric',
            'sf32' => 'required|numeric',
            'sf33' => 'required|numeric',
            'sf34' => 'required|numeric',
            'sf35' => 'required|numeric',
            'sf36' => 'required|numeric',
        ];
    }
}
