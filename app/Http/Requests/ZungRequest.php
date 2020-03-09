<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZungRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return ['patient_id' => 'required|integer',
                'Fecha_zung' => 'required|date',
                'Zung_1'  => 'required|in:1,2,3,4',
                'Zung_2'  => 'required|in:1,2,3,4',
                'Zung_3'  => 'required|in:1,2,3,4',
                'Zung_4'  => 'required|in:1,2,3,4',
                'Zung_5'  => 'required|in:1,2,3,4',
                'Zung_6'  => 'required|in:1,2,3,4',
                'Zung_7'  => 'required|in:1,2,3,4',
                'Zung_8'  => 'required|in:1,2,3,4',
                'Zung_9'  => 'required|in:1,2,3,4',
                'Zung_10' => 'required|in:1,2,3,4',
                'Zung_11' => 'required|in:1,2,3,4',
                'Zung_12' => 'required|in:1,2,3,4',
                'Zung_13' => 'required|in:1,2,3,4',
                'Zung_14' => 'required|in:1,2,3,4',
                'Zung_15' => 'required|in:1,2,3,4',
                'Zung_16' => 'required|in:1,2,3,4',
                'Zung_17' => 'required|in:1,2,3,4',
                'Zung_18' => 'required|in:1,2,3,4',
                'Zung_19' => 'required|in:1,2,3,4',
                'Zung_20' => 'required|in:1,2,3,4',
        ];
    }
}
