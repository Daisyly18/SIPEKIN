<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',

            'name' => 'required',
            'staffIdentityCardNo' => 'required|unique:employees,staffIdentityCardNo',
            'department' => 'required',
            'position' => 'required',
            'dateJoined' => 'required|date|',
            'dateInThePresentPosition' => 'required|date|',


        ];
    }
    public function messages()
    {
        return [
            'staffIdentityCardNo.unique' => 'Staff Identity Card No sudah digunakan.',
            'email.unique' => 'Email sudah digunakan.',
            'password_confirmation.same' => 'Konfirmasi password tidak sama.',
        ];
    }
}
