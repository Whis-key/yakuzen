<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConfig extends FormRequest
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
            'price' => 'required|numeric',
            'expiration' => 'required|numeric',
            'video' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'price.required' => 'Vui lòng nhập giá sản phẩm',
            'price.numeric' => 'Giá sản phẩm phải có định dạng là số',
            'video.required' => 'Vui lòng nhập link video phản hổi khách hàng',
            'video.url' => 'Đường dẫn video phản hổi không đúng',
            'expiration.required' => 'Vui lòng nhập số ngày hết hạn khuyến mãi',
            'expiration.numeric' => 'Số ngày hết hạn khuyến mãi phải có định dạng là số'
        ];
    }
}
