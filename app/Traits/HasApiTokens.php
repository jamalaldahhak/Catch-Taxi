<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens as SanctumHasApiTokens;
use Laravel\Sanctum\NewAccessToken;

trait HasApiTokens
{
    use SanctumHasApiTokens;

    public function createToken(string $name, $expireMinutes = null, array $abilities = ['*']): NewAccessToken
    {
        $token = $this->tokens()
            ->create([
                'name'       => $name,
                'token'      => hash('sha256', $plainTextToken = Str::random(40)),
                'abilities'  => $abilities,
                'expires_at' => $expireMinutes ? now()->addMinutes($expireMinutes) : null,
            ]);

        return new NewAccessToken($token, $plainTextToken);
    }

    public function createAuthToken(string $name = 'API', $expireMinutes = null, array $abilities = []): NewAccessToken
    {
        return $this->createToken($name, $expireMinutes ?? config('sanctum.expiration'), array_merge($abilities, ['auth']));
    }
}

