<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ChangePasswordRequest extends Request
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
            'password_current' => 'required|max:24|min:6',
            'password_new'=> 'required|max:24|min:6',
            'password_new_confirm' => 'required|same:password_new',
        ];
    }

    public function  messages()
    {
        return [
            'password_current.required'=>'Vui lòng nhập mật khẩu cũ !',
            'password_new.required'=>'Vui lòng nhập mật khẩu mới!',
            'password_new_confirm.required'=>'Vui lòng nhập lại mật khẩu mới!',
            'password_new_confirm.same'=>'Nhập lại mật khẩu mới không đúng !'
        ];
    }
}
