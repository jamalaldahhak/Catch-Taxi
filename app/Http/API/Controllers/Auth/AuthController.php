<?php

namespace App\Http\API\Controllers\Auth;

use App\Http\API\Repositories\Auth\AuthRepository;
use App\Http\API\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\Http\API\Controllers\Controller;

class AuthController extends Controller

{
    public function __construct(protected AuthRepository $authRepo) {}

    public function showLogin()
    {
        return view('auth.login');
    }

 public function login(LoginRequest $request)
{
    $data = $request->validated();

    try {
        $this->authRepo->login($data);
        $request->session()->regenerate();

        return redirect()->intended('/dashboard');
    } catch (\Throwable $e) {
        return back()->withErrors(['email' => $e->getMessage()])->withInput();
    }
}


    public function logout(Request $request)
    {
        $this->authRepo->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

