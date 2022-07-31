<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class myregisrtation extends FormRequest
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
            'fname'=>'required|max:50',
            'lname'=>'required|max:50',
            'mobile'=>'required|min:11|numeric',
            'tel'=>'required|min:11|numeric',
            'birthday'=>'required',
            'address'=>'required',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i ',
            'website'=>'required',

            //Validation for User Account
            'uname'=>'required|min:6|max:12',
            'psw'=>'required|min:6|max:12',
            'rpsw'=>'required',
        ];
    }
    public function messages(){
        return [
            //required section
            'fname.required' =>'First Name Required',
            'fname.max' => 'First Name has not More Than 50 Characters',
            'lname.required' =>'Last Name Required',
            'sex.required' =>'Gender Required',
            'mobile.required' =>'11 Digits Required',
            'tel.required' =>'11 Digits Required',
            'birthday.required' =>'Birthday Required',
            'address.required' =>'Address Required',
            'email.required' =>'Invalid Email',
            'website.required' =>'Invalid Url',

            // required section for user account

            'uname.required' =>'Username Required',
            'psw.required' =>'Atleast 6-12 Characters',
            'rpsw.required' =>'Password Not Match',
        ];
    }
}
