<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function login()
    {
        return view('end-user.user.login');
    }

    public function cek_login(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return $this->error('', 'Credential not match !', 401);
        }

        $staff = Staff::where('email', $request->email)->first();
        $staff->createToken('API Token of ' . $staff->name)->plainTextToken;


        if (auth()->check()) {
            return redirect('/dashboard');
        } else {
            return redirect('/login');
        }
    }

    public function logout(Request $request)
    {
        Auth::user()->tokens->each(function ($token, $key) {
            $token->delete();
        });

        Auth::user();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
