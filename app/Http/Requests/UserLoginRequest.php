<?php

namespace App\Http\Requests;

class UserLoginRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return string[]
     */
    public function rules()
    {
        return [
            'username' => 'required|string',
            'password' => 'required',
        ];
    }
}
