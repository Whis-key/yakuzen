<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedback extends FormRequest
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
            'address' => 'required|max:255',
            'content' => 'required|max:3000',
            'age' => 'required|numeric',
            'image' => 'required|mimes:jpeg,bmp,png'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên khách hàng',
            'address.required' => 'Vui lòng nhập địa chỉ khách hàng',
            'content.required' => 'Vui lòng nhập nội dung phản hồi',
            'age.required' => 'Vui lòng nhập tuổi khách hàng',
            'age.required' => 'Nhập đúng số tuổi khách hàng (định dạng số)',
            'image.mimes' => 'Hình đại diện không đúng định dạng',
            'image.required' => 'Vui lòng chọn hình đại diện'
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
