<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveRemark extends FormRequest
{
    // command    php artisan make:request SaveRemark

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
            'customer_name' => 'bail|required|max:10',  
            'mobile' => 'required|unique:messages|max:11',
            'customer_email' => 'email',
            'subject' => 'required|max:20',
            'customer_subscribe' => 'max:200',
        ];
    }

    /**
     * display error messages
     *
     * @return array
     * by sane
     */
    public function messages(){
        return [
            'customer_name.required' => '“姓名”必填。',
            'mobile.required' => '必须填写“手机”。',
            'mobile.unique' => '该“手机号”已在此留言过。',
            'customer_email.email' => '"邮箱"必须是一个有效的邮箱',
            'subject.required' => '“主题”必填。',
            'subject.max' => '“主题”长度不可以大于20。',
            'customer_subscribe.max' => '“描述”长度不可以大于200。',
        ];
    }

}
