<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class EditRoleRequest extends FormRequest
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
             'name'=>'unique:roles,title,'.$request->id.',id',
        ];
    }

     public function messages(){
        return[
            'name.unique'=>'tên danh mục đã bị trùng',

         
        ];
    }
}
