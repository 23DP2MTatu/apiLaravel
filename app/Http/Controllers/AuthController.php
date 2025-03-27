<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    function loginView() {
        return view('Login');
    }

    function RegisterView() {
        return view('Register');
    }

    function register(userRequest $request) {

        $validated = $request -> validated();

        $validated['password'] = Hash::make($validated['password']);
        
        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route('post.index');
    }

    function login(Request $request) {
        
        $validated = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);
        
        $user = User::where('email', $validated['login'])
            ->orWhere('username', $validated['login'])
            ->first();

            if ($user && Hash::check($validated['password'], $user->password)) {
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->route('post.index');
            }

        return back()->withErrors(['email' => 'error']);
    }

    function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('post.index');
    }
}
