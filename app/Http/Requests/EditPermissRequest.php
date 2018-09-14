<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class EditPermissRequest extends FormRequest
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
            'name'=>'unique:permissions,title,'.$request->id.',id',
            'urlname'=>'unique:permissions,url,'.$request->id.',id',
        ];
    }

    public function messages(){
        return[
            'name.unique'=>'tên danh mục đã bị trùng',
            'urlname.unique'=>'tên đường dẫn đã bị trùng',

         
        ];
    }
}
