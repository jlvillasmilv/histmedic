<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FollowInterviewRequest extends FormRequest
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
             'Fech_entrevSeg'    => 'required|date',
              ];
    }
}
