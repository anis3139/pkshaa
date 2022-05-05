<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
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
            'name' => 'required',
            // 'username' => 'required|string|max:255|min:4|alpha_dash|unique:users,username,',
            'picture' =>  'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1024',
            'email' => 'required|string|email|max:255|min:4|unique:users,email,',
            'phone' => 'required|min:10|max:20|unique:users,phone,',
            'password'=> 'required|min:6',
            'password_confirmation'=> 'required|same:password'
        ];
    }
}
