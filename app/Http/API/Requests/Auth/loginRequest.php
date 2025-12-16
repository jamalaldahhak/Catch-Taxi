<?php

namespace App\Http\API\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email'    => 'required|email',
            'password'  => ['required', 'string'],
            'udid'      => ['string'],
            'fcm_token' => ['required_with:udid'],
        ];
    }
}
