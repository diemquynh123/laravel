<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class EditProdRequest extends FormRequest
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
            'title'=>'unique:products,title,'.$request->id.',id',
            'categories'=>'unique:products,categories'.$request->id.',id',
            'author'=>'unique:products,author'.$request->id.',id',
            //'date'=>'unique:products,date'.$request->id.',id',
            'status'=>'unique:products,status'.$request->id.',id',
            'content'=>'unique:products,content'.$request->id.',id',
          
        ];
    }

    public function messages(){
        return[
            'title.unique'=>'tên bài viết đã bị trùng',
// categories
// author
// date
// status
// content
         
        ];
    }
}
