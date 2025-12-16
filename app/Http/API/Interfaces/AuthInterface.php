<?php

namespace App\Http\API\Interfaces\Auth;

use App\Models\User;
use Illuminate\Support\Collection;
use Laravel\Sanctum\NewAccessToken;

interface AuthInterface
{
    public function register(Collection $data);

    public function login(Collection $data);
    public function logout(Collection $data);

    public function refresh(Collection $data);

    public function update(Collection $data);

    public function changePassword(Collection $newPassword);

    public function registerDevice($udid = null, $fcm_token = null);

    public function unregisterDevice($udid = null);

    public function requestPhoneOtp(string $phone);

    public function respondWithToken(NewAccessToken $token, NewAccessToken $refreshToken, $user);
}

