<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules(Request $request)
    {
        return [

            'user_name' => 'required|max:50|unique:users,user_name,'.$request->input('id'),
            'name'      => 'required|min:2|max:100',
            'email'     => 'required|email|max:150|unique:users,email,'.$request->input('id'),
        ];
    }
}
