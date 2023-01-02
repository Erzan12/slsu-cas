<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['username', 'password']);
        $credentials['account_type'] = 3;
        if(!$user = User::authenticate($credentials))
        {
            return back()->withErrors([
                'error' => 'Invalid Credentials'
            ]);
        }

        Auth::login($user);
        $request->session()->regenerate();
        return redirect(route('dashboard'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

}
