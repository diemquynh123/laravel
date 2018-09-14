<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'title'=>'required',
            'Categories'=>'required',
            'content'=>'required',
            'status'=>'required',
        ];
    }

    public function messages() {
        return [
            "title.required" => "bạn chưa nhập tiêu để",
            "Categories.required" => "bạn chưa nhập loại",
            "content.required" => "bạn chưa nhập nội dung",
            "status.required" => "bạn chưa nhập trạng thái",
        ];
    }
}
