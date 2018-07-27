<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNews extends FormRequest
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
            'name' => 'required|max:255',
            'snippet' => 'required|max:1000',
            'thumbnail' => 'required|mimes:jpeg,bmp,png',
            'category' => 'required',
            'content' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập tiêu đề bài viết',
            'snippet.required' => 'Vui lòng nhập nội dung tóm tắt',
            'content.required' => 'Vui lòng nhập nội dung bài viết',
            'thumbnail.required' => 'Vui lòng chọn hình đại diện',
            'thumbnail.mimes' => 'Hình đại diện không đúng định dạng'
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if(!empty($validator->errors())){
                $this->session()->flash('pdata', $this->input());
            }
        });
    }
}
