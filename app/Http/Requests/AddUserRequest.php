<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
        return [
            //
            'name' =>'unique:users,name',
            'email'=>'unique:users,email',
        ];
    }

     public function messages(){
        return[
            'name.unique'=>'tên danh mục đã bị trùng',
            'email.unique'=>'tên danh mục đã bị trùng'
        ];
        
    }
}
