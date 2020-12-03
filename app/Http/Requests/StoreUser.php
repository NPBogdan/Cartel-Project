<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            "name" =>["required","min:3","max:254","alpha"],
            "firstName" =>["required","min:3","max:254","alpha"],
            "email" =>["required","email:rfc","max:254"],
            "password" =>["required","min:8","max:20"],
            "address" =>["required","alpha_num","min:5","max:254"],
            "birthday" => ["required"]
        ];
    }
}
