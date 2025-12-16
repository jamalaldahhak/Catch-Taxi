<?php

namespace App\Http\API\Repositories\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthRepository
{
   protected User $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * Login admin or user
     */
   public function login(array $data): bool
{
    $user = $this->model->where('email', $data['email'])->first();

    if (! $user || ! Hash::check($data['password'], $user->password)) {
        throw ValidationException::withMessages([
            'email' => 'Invalid credentials.',
        ]);
    }

    Auth::login($user, $data['remember'] ?? false); // remember صحيح
    return true;
}

    /**
     * Register new user
     */
    public function register(array $data): User
    {
        $user = $this->model->create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Auth::login($user);
        return $user;
    }

    /**
     * Logout user
     */
    public function logout(): void
    {
        Auth::logout();
    }
}

