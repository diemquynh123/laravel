<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            //
            'name'=>'unique:users,name,'.$request->id.',id',
            'email'=>'unique:users,email,'.$request->id.',id',
        ];
    }

    public function messages(){
        return[
            'name.unique'=>'tên người dùng đã bị trùng',  
            'email.unique'=>'email đã bị trùng',     
        ];
    }
}
