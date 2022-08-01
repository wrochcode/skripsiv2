<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=> ['required', 'min:3', 'string'],
            'username'=> ['required'],
            'email'=> ['required','unique:users', 'email'],
            'address'=> ['required', 'string'],
            // 'nomeranggota'=> ['required', 'numeric'],
            'role'=> ['required', 'numeric'],
            'password'=> ['required'],
        ];
    }
}
